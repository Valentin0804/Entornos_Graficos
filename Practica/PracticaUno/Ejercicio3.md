# Ejercicio 3
## a) 
  1- < a href="http://www.google.com.ar">Click aquí para ir a Google < /a >
  2- < a href="http://www.google.com.ar" target="_blank">Click aquí para ir a Google < /a >
  3- < a href="http://www. google.com.ar" type="text/html" hreflang="es" charset="utf-8" rel="help" >
  4- < a href="#">Click aquí para ir a Google < /a >
  5- < a href="#arriba">Click aquí para volver arriba < /a >
  6- < a name="arriba" id="arriba"> < /a >

  - En 1- es un enlace simple, al ahcer click se abre el sitio de google en la misma pestaña. el texto aparece subrayado y de color azul
  - En 2- le agrega el atributo target con el valor "_blank" que al hacer click abre google en una nueva pestaña
  - En 3- La URL tiene un espacio lo cual la hace inválida
  - En 4- href="#" hace que el navegador vuelva al tope de la pagina, no lleva a google
  - En 5- href="#arriba" es un enlace a un ancla dentro de la misma pagina con id="arriba" o name="arriba"
  - en 6- es el destino del enlace anterior

## b)
  1- < p > < img src="im1.jpg" alt="imagen1" /><a href="http://www.google.com.ar">Click aquí < /a > < /p >
  2- < p > < a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" /> < /a > Click aquí < /p >
  3- < p > < a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" />Click aquí < /a > < /p >
  4- < p > < a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" /> < /a > < a href="http://www.google.com.ar" >Click aquí < /a > < /p >

  - En 1- la imagen y el texto estan dentro del mismo parrafo, pero no relacionados entre si. primero se muestra la imagen, luego el texto
  - En 2- la imagen está dentro del enlace, al hacer click en la imagen se abre google, despues del enlace aparece el texto
  - En 3- la imagen y el texto están dentro del mismo enlace, todo el contenido es clickeable
  - En 4- Hay 2 enlaces, uno con la imagen y otro con el texto, los dos llevan a google

## c) 
  1- < ul >
      < li > xxx < /li >
      < li > yyy < /li >
      < li > zzz < /li >
    < /ul >

  2-  < ol >
        < li > xxx < /li >
        < li > yyy < /li >
        < li > zzz < /li >
      < /ol >

  3- < ol >
        < li > xxx < /li >
        < /ol >
        < ol >
        < li value="2" > yyy < /li >
        < /ol >
        < ol >
        < li value="3" > zzz < /li >
     < /ol >

  4- < blockquote >
        < p > 1. xxx < br/ > 2. yyy < br/ > 3. zzz < /p >
     < /blockquote >


  - En 1- Es una lista no ordenada, los elementos < li > aparecen con viñetas
  - En 2- Lista ordenadas, usa nuemracion automatica
  - En 3- Tres listar separadas, cada una con un solo elemento < li >, los elemntos tienen valores forzados con el atributo value
  - En 4- Bloque de cita textual, escrito manualmente como si fuera una lista numerada. se una el < br > para salto de linea


## d) 
  1- < table border="1" width="300" >
        < tr >
          < th > Columna 1 < /th >
          < th > Columna 2 < /th >
        < /tr >
        < tr >
          < td > Celda 1 < /td >
          < td > Celda 2 < /td >
        < /tr >
        < tr >
          < td > Celda 3 < /td >
          < td > Celda 4 < /td >
        < /tr >
     < /table >


  2- < table border="1" width="300" >
      < tr >
        < td > < div align="center" > < strong > Columna 1 < /strong > < /div > < /td >
        < td > < div align="center" > < strong > Columna 2 < /strong > < /div > < /td >
      < /tr >
      < tr >
        < td > Celda 1 < /td >
        < td > Celda 2 < /td >
      < /tr >
      < tr >
        < td > Celda 3 < /td >
        < td > Celda 4 < /td >
      < /tr >
    < /table >

- En 1- Se usa el < th > para los encabezados, indicando los titulos de columna
- En 2- Usa < td > con contenido centrado y en negrita manualmente para hacer visualmente una cabecera que semanticamente no lo es

## e) 
  1- < table width="200" >
        < caption > Título < /caption >
        < tr >
          < td bgcolor="#dddddd" > &nbsp; < /td >
          < td bgcolor="#dddddd" > &nbsp; < /td >
          < td bgcolor="#dddddd" > &nbsp; < /td >
        < /tr >
        < tr >
          < td bgcolor="#dddddd" > &nbsp; < /td >
          < td bgcolor="#dddddd" > &nbsp; < /td >
          < td bgcolor="#dddddd" > &nbsp; < /td >
        < /tr >
     < /table >

  2- < table width="200" >
        < tr >
          < td colspan="3" > < div align="center" > Título < /div > < /td >
        < /tr >
        < tr >
          < td bgcolor="#dddddd" > &nbsp; < /td >
          < td bgcolor="#dddddd" > &nbsp; < /td >
          < td bgcolor="#dddddd" > &nbsp; < /td >
        < /tr >
        < tr >
          < td bgcolor="#dddddd" > &nbsp; < /td >
          < td bgcolor="#dddddd" > &nbsp; < /td >
          < td bgcolor="#dddddd" > &nbsp; < /td >
        < /tr >
    < /table >

  - En 1- El titulo se define con la etiqueta < caption >, es la forma semantica correcta de darle titulo a una tabla
  - En 2- El titulo se agrega como una fila mas de la tabla, usando colspan="3" para que ocupe el ancho comple de las tres columnas


## f)
  1- < table width="200" >
        < tr >
          < td colspan="3" > < div align="center" > Título < /div > < /td >
        < /tr >
        < tr >
          < td rowspan="2" bgcolor="#dddddd" > &nbsp; < /td >
          < td bgcolor="#dddddd" >&nbsp; < /td >
          < td bgcolor="#dddddd" >&nbsp; < /td >
        < /tr >
        < tr >
          < td bgcolor="#dddddd" > &nbsp; < /td >
          < td bgcolor="#dddddd" > &nbsp; < /td >
        < /tr >
      < /table >

  2- < table width="200" >
        < tr >
          < td colspan="3" > < div align="center" > Título < /div > < /td >
        < /tr >
        < tr >
          < td colspan="2" bgcolor="#dddddd" > &nbsp; < /td >
          < td bgcolor="#dddddd" > &nbsp; < /td >
        < /tr >
        < tr >
          < td bgcolor="#dddddd"> &nbsp; < /td >
          < td bgcolor="#dddddd"> &nbsp; < /td >
          < td bgcolor="#dddddd"> &nbsp; < /td >
        < /tr >
      < /table >

  - En 1- Fila 1: titulo centrado, Fila 2: 1° celda se extiende verticalmente con rowspan="2"
  - En 2- Fila 1: titulo centrado, Fila 2: 1° celda ocupa dos columnas con colspan="2"














    





    
