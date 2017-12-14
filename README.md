# Zinobe Backend Test - PHP

Hola y muchas gracias por tomar el tiempo para la prueba.

El objetivo de la prueba es conocer un poco de sus hábilidades y conocimientos para desarrollar software. El problema a continuación es algo muy sencillo, la razón es que se pueda concentrar en demostrar su conocimiento y no tanto en el problema en sí.

Se permite usar (ademas lo alentamos a que lo haga) librerías de terceros siempre y cuando no utilice un framework completo para ello. Un desarrollador sabrá como construir aplicaciones pero más allá, sabrá como funcionan las herramientas que usa en el día a día. De ser necesario, se le preguntará el por qué del uso de algunas de ellas, así que tenga esto en mente a la hora de seleccionarlas.

Este es un proceso hecho con code review dentro del sitio web de gitlab, por favor abstengase de usar código generado. Esto significa no incluir librerías como Twitter Bootstrap directamente en el proyecto (utilice un CDN en su lugar), evite usar librerías como Propel ORM que genera miles de líneas de código.

## Instrucciones

* Clone este repositorio
* Cree un branch llamado `develop`
* El archivo de partida será el incluido `index.php`
* Puede crear la estructura de proyecto que desee
* Realice un `Merge Request` a `master`. Cuando termine y envíe un correo a `juanpablo@zinobe.com` para iniciar el proceso de revision
* El problema puede ser resuelto en pocas horas pero tomese el tiempo que considere necesario (no más de 3 días a partir de la recepción del repositorio)

Al terminar, en el `Merge Request` asegúrese de escribir su enfoque de la prueba en la descripción. Haremos preguntas sobre el código que esperamos pueda responder. Este proceso nos ayudará a entender como sería trabajar juntos.

## Requerimientos

Queremos que construya un directorio de usuarios sencillo. La interfaz de usuario no debe ser bonita, no importa en realidad como luzca, pero debe funcionar.

### Características
	
* Registro de usuario
* Login de usuario
* Logout de un usuario
* Búsqueda de usuarios

### Reglas

* Cualquiera puede registrarse
* La búsqueda de usuario debe ser hecha en un solo campo de texto
* La búsqueda de usuario debe encontrar usuarios por nombre o correo electrónico 
* Usuarios no logueados puede llenar el formulario de registro
* Sólo los usuarios logueados pueden hacer búsquedas y ver sus resultados
* Usuarios logueados NO deben ver los formularios de login o de registro

### Datos de usuario

* Nombre - requerido - min 3 caracteres
* Email - requerido - unico - dirección válida
* País - requerido (Se deben proveer opciones, puede sacar la lista de algún servicio que sirva el listado ISO-3166-2 como http://data.okfn.org/data/core/country-list)
* Password - requerido - cualquier caracter válido - min 6 caracteres - al menos 1 dígito

### Tecnología

* Código válido PHP 5.6+
* Persistir datos en MySQL

### Criterio de evaluación

* Lo animamos a usar paquetes (https://packagist.org/) pero no un framework completo (microframeworks tampoco son permitidos)
* La aplicación debe funcionar. Por favor proveer instrucciones de como instalarla y correrla.
* Principios SOLID, en especial SRP e Inyección de dependencias
* Pruebas
* Seguridad
* Uso de composer
* Respuestas durante la evaluación
* Uso de UTF-8

Los siguientes ítems le darán puntos extra

* Una descripcion muy precisa al hacer el `Merge Request`
* Instalación de la aplicación con una sola linea de comandos o con un script
* Enrutar con url amigables
* Uso de ORM
* Uso de un motor de plantillas
* Seguir guías de estilo PSR-4 y PSR-2
* Historia de git (aún cuando sea corta) con mensajes de commit claros y concisos

***¡Buena Suerte!***