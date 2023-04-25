# serial-no-repeat
Este pequeño código genera una cantidad ─solicitada al usuario─ de pares de credenciales, en una lógica de "usuario > contraseña" aleatorios.
La credencial que corresponde a la contraseña, al ser secreta, no importa que se repita en dos o más usuarios, pero la credencial que corresponde al nombre de usuario es importante que no se repita, que sea único, por lo que este código revisa recursivamente los usuarios pre-existentes para así asegurarse de que no se repitan.

Por defecto se genera una credencial de nombre de usuario con la siguiente lógica: 

unico_x

En donde x es 1 solo caracter, dentro de esta librería "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ" de caracteres, por ejemplo, unico_1, unico_Z, unico_r.

Por lo que la posibilidad de que no se repita se limita a la longitud específica de dicha librería. Esta posibilidad de no repetirse incrementa si se le agregan caracteres a la credencial de nombre de usuario, sin la necesidad de incrementar la librería de caracteres, por ejemplo, unico_e3, unico_ejXx, unico_3_aH6j7, y así sucesivamente, mientras que la librería de caracteres sigue siendo exactamente la misma. Para hacer esto, simplemente se modifica en el archivo de "control.php" la variable-función llamada "$rand = getRandomStr()", agregando el número de caracteres que se quieran agregar luego del fragmento de «unico_».

## Posibilidad de utilizarse con Base de Datos
Muy fácilmente esto puede lograrse, cambiando el segmento de chequeo de elementos repetidos:

$existingElement = array_search($elemento, array_keys($usr));

Cambiándolo por una llamada SQL a una base de datos, para que así el programa no corrobore dentro de el mismo array temporal generado cada que se presiona el botón de «Generar» como ocurre en este ejemplo del código, sino en una base de datos permanente.
