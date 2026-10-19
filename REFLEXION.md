# Reflexión (Etapa 4)

Responde con tus palabras (mínimo 40 palabras por respuesta). Ver README, Etapa 4.

## Pregunta 1
1. Mi código personal que me salió en la terminal es e584c6d2. Según lo que vi con el comando 
gettype, este dato es de tipo string, osea que es una cadena de texto. La función substr devuelve 
un string porque su trabajo es cortar pedasos de texto. Si yo intentara sumar este código con un 
número normal, php intentaría convertirlo pero como tiene letras mezcladas seguramente me de un 
error o simplemente sume un cero porque no lo entiende como un numero matematico.

## Pregunta 2
2. El valor del precio me sale como double en lugar de float porque en php esos dos nombres 
significan exactamente lo mismo por la historia del lenguaje, pero gettype siempre usa la palabra 
double por defecto. La suma de 0.1 + 0.2 da false al compararlo con 0.3 porque las computadoras no 
guardan los decimales de forma tan exacta y siempre quedan basuritas como 0.300000004. En mi caso 
mi variable n1 es un integer osea un numero entero limpio. La diferencia es que intdiv hace la 
division y te da solo la parte entera cortando el resto, mientras que la division normal con la 
barra / si te arroja los decimales completos.
## Pregunta 3
3. La diferencia mas importante es que define() es una funcion que se ejecuta cuando el programa 
ya esta corriendo paso a paso, mientras que const es parte directa del lenguaje y se procesa 
antes. Al intentar redefinir la constante obtuve un valor false, porque las constantes por regla 
no se pueden cambiar nunca una vez que ya las creaste. Actualmente estoy usando el servidor Apache 
con el XAMPP y mi version exacta de PHP es la 8.2.12, y el sistema me impidió sobreescribir la 
semilla para proteger el codigo.

# Reflexión del Laboratorio 8

### Reflexión final del laboratorio

A modo de conclusión general, configurar el entorno local con XAMPP y hacer la conexión a la base 
de datos fue un buen reto. Al principio tuve un problema de "host desconocido" por pasar mal los 
datos de configuración a mysqli, pero lo pude solucionar rápido revisando el arreglo. Me llamó 
mucho la atención cómo PHP hace las conversiones de tipos automáticas y permite sumar textos con 
números sin que el programa se caiga, algo que en otros lenguajes que he tocado antes como Java o 
Python es mucho más estricto y daría error al instante. En general me sirvió bastante para 
entender las bases del backend, ver cómo se genera un JSON desde el servidor y perderle el miedo a 
las calificaciones automáticas de GitHub.





