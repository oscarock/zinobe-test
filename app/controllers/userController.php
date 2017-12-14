<?php
	namespace Controllers;
	use Models\User;

	class UserController{

		public function registrar_usuario(){
			$user = new User;
			$user->name = $_POST['name'];
			$user->email = $_POST['email'];
			$user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
			$user->country = $_POST['country'];
			$user->save();
		}

		public function login_usuario(){
			/*declaracion de variables*/
			$email = $_POST['email'];
			$password = $_POST['password'];
			$password_bd = "";

			/*se busca el password de ese email*/
			$find_email = User::where('email', $email)
									->get();
			foreach ($find_email as $value) {
				$password_bd = $value->password;
			}
			
			/*se compara los passwords de la bd y del post*/
			$password_verificado = password_verify($password, $password_bd);

			/*condicion para ingresar al sistema*/
			if ($password_verificado) {
				/*se crean las variables de sesion*/
				session_start();
				$_SESSION["autenticado"] = "SI";
				$_SESSION["email"] = $email;
				header('Location: ingreso'); //se redireccion a la ruta ingreso
			} else {
  			header('Location: error'); //se redireccion a la ruta de error
			}
		}

		public function consulta_usuarios(){
			$search = $_POST['buscar'];

			if(empty($search)){
				$user = User::all();
				echo json_encode(array("user" => $user));
			}else{
				$user = User::where('email', $search)
    						->orWhere('name', 'like', '%' . $search . '%')->get();
      	echo json_encode(array("user" => $user));
			}
    }
	}
?>