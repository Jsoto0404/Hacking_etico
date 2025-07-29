Inyección SQL

NOTA: ESTA ACTIVIDAD FUE REALIZADA CON FINES EDUCATIVOS.

Ingresamos a OWASP MUTILLIDAE II

1.- Ir directamente al login/registrer.
![alt text](<Capturas/Captura de pantalla 2025-05-19 202218.png>)

2.-Ingresamos una comilla simple en el campo del usuario y una contraseña o palabra aleatoria dentro del campo contraseña, lo cual generara lo siguiente.
![alt text](<Capturas/Captura de pantalla 2025-05-19 202656.png>)

3.- La presente imagen es un error de SQL el cual indica una vulnerabilidad dentro del php.
![alt text](<Capturas/Captura de pantalla 2025-05-19 202704.png>)

4.-Despues ingresamos el Payload de autenticación forzada, el cual consiste en ingresar en el campo usuario una consulta SQL la cual indica que siempre es verdadera.
![alt text](<Capturas/Captura de pantalla 2025-05-19 203602.png>)

7.-Por lo consiguiente logramos tener acceso a la cuenta de usuario, sin la verificación de credenciales, ya que si observamos en el paso 3, podemos observar que si añadimos un -- antes del password se estaria comentando ese parametro, por lo consiguiente omitiendo la validación de credenciales.
![alt text](<Capturas/Captura de pantalla 2025-05-19 203645.png>)