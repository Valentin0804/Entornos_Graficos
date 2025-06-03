# Ejercicio 1

Variables-> $a : Boolean, $b : String, $c : String, $d : Integer, $f : Integer, $g : Integer.

Operadores Aritmeticos-> * : Multiplicacion, += : Suma y Asignación, ++ : Incremento.
Operadores de Comparacion -> is_int() : Verifica si es entero, is_string() : Verifica si es string.
Operadores logicos-> ?: : Operador ternario.

Funciones -> 
 doble($i) : Parametro: $i (numerico)
 gettype($var) : Parametro: $var (de cualquier tipo)
 is_string($var) : Parametro: $var (de cualquier tipo)
 is_int($var) : Parametro: $var (de cualquier tipo)

Estructuras de control -> 
if (){} : Condicional
?: : Operador ternario

Impresion por pantalla -> booleanstringstringinteger1xyzxyz184444


# Ejercicio 2
 ## a) Si los 3 codigos son equivalentes
 mostrará del 1 al 10
 ## b) Si los 4 codigos son equivalentes
 imprimira los numeros del 1 al 10
 ## c) Si los 3 codigos son equivalentes
 imprime una cadena de texto específica dependiendo del valor de la variable $i

# Ejercicio 3
 ## a) Explicacion del codigo
 Está la estructura basica de HTML, con el titulo del documento como "Documento 1", luego se habre la etiqueta de PHP, donde se impre la etiqueta de apertura de una tabla
 con 90% del ancho y con un bordel viseble de un px, luego declara 2 variables $row y $col inicializadas con 5 y 2 respectivamente. despues aparece el bucle for, donde se repite
 5 veces y se genera una nueva fila con <tr> y dentro de este bucle encontramos otro que se repite 2 veces donde se generan celdas dentro de la fila actual <td>&nbsp;</td>/n
 despues se cierra la fila actual y despues se cierra la tabla.

 ## b) Explicacion del codigo
  Este codigo tiene como objetivo crear un formulario web para que el usuario ingrese su edad y luego determinan si es mayor o menor de 21 años.
  Empieza con la estructura basica de HTML, con el titulo del documento como "Documento 2", Luego se abre la etiqueta de PHP, que inicia con un if, $_POST['submit'] es una variable 
  superglobal que contiene los datos enviados desde un formulario HTML a través del metodo "POST", en este caso busca un campo llamado submit. isset verifica si una variables esta definida y no es null
  El siguiente bloque de HTML, se muestra solo si la condicion del if es verdadera, se define un formulario que enviara sus datos usando el metodo HTTP POST, el action hace que el formulario se envie
  a la misma pagina PHP en la que se encuentra, $_SERVER['PHP_SELF'] es otra super variable. Despues se crea un campo de entrada de texto donde el usuario puede escribir su edad, con un name ="age" que
  es crucial ya que se usara para acceder al valor, con un tamaño de 2 caracteres. con el imput se crea el boton de envio del formulario, el name = "submit" es el que anteriormente se verifica que 
  no sea nulo, y el valor es el texto que aparece en el boton. el bloque siguiente de PHP, se ejecuta si la condicion del if es falsa, recupera el valor que el usuario ingreso en el campo de texto
  con name = "age" y lo guarda en la variable $age, con la estructura condicion verifica si la edad es mayor de edad, e impreme "mayor de edad" o "menor de edad"


# Ejercico 4
 ## La salida final seria:
  El
  El clavel blanco
  Ya que cuando se ejecuta la primera instruccion echo, las variables aun no han sido definidas en el script princial
  La instruccion include 'datos.php' ajecuta el codigo dentro, donde se establecen el valor de las variables que ahora existen en el ambito
  Cuando se ejecuta la segunda instruccion echo, las variables ya estan definidas con los valores importados de datos.php

# Ejercicio 5
