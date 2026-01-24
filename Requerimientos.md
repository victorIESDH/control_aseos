## Descripción
La aplicación deberá gestionar el acceso a los baños del centro por parte del alumnado del instituto. Para ello, se implementará un sistema de control que permita a los profesores solicitar acceso a los baños para un alumno en concreto y este quede registrado en el sistema.
Además, se podrá generar reportes sobre el uso de los baños

## Funcionalidades
1. Solicitud de acceso: Los profesores podrán solicitar el acceso al baño para un alumno específico a través de la aplicación. 
2. Registro de uso: El sistema registrará la solicitud de acceso, incluyendo la información del alumno, el profesor que realizó la solicitud y la hora de acceso.
3. Reportes de uso: La aplicación permitirá generar reportes sobre el uso de los baños, incluyendo estadísticas como la frecuencia de uso por alumno, hora y día.
4. Gestión de usuarios: El sistema contará con un sistema de autenticación y autorización para garantizar que solo los profesores autorizados puedan realizar solicitudes de acceso.

## Tablas
Para implementar esta funcionalidad, se necesitarán las siguientes tablas:
1. Para la gestión de Usuarios se utilizará la tabla user del sistema.
2. Alumnos: Contiene información sobre los alumnos del instituto. Deberá incluir el nombre completo del alumnno y el grupo al que pertenece. (id, nombre, grupo)
3. Aseos: Contiene información sobre los baños disponibles en el instituto. Tan solo necesita un identificador único  y una descripción para cada baño .(id, descripcion)
4. Solicitudes: Registra las solicitudes de acceso a los baños. Se deberá almacenar el identificador del alumno, el identificador del baño, el identificador del profesor que realizó la solicitud y la fecha y hora de la solicitud. Tambien se deberá incluir un campo llave para controlar si esta fue devuelta o no.
(id, alumno_id, aseo_id, user_id, fecha_hora, llave)

## vistas
Se deberán crear las siguientes vistas:
1. Vista de solicitud de acceso: Un formulario donde los profesores puedan seleccionar un alumno y un baño para solicitar acceso.
2. Vista de registro de uso: Una página que muestre un historial de las solicitudes de acceso realizadas, incluyendo detalles como el alumno, el baño, el profesor y la fecha y hora de la solicitud. Desde esta vista se podrá asignar baño al alumno y marcar si la llave fue devuelta.
3. Vista de reportes: Una página donde se puedan generar y visualizar los reportes sobre el uso de los baños.
