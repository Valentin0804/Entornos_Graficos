# Ejercicio 2

## a) <!-- Código controlado el día 12/08/2009 -->
  Se puede encontrar en cualquier parte del documento. Es un comentario no hace ningún efecto en la visualización del html, si no explica o facilita la lectura del mismo.

## b) < div id=”bloque1” > Contenido del bloque 1 < /div >
  Se cuenta dentro de la etiqueta < body >, < div > lo que hace es agrupar una seccion determinada del documento, tiene un atributo que se llama “id” y un valor de “bloque1” que no es obligatorio.

## c) <img src=”” alt=”lugar img” id=”iml” naml=”iml” width=”32” height=”32” longdes=”detalles.htm”/>
  La etiqueta < img > se encuentra dentro del < body >, es la etiqueta para mostrar una imagen en nuestra página, 
  en este caso hay un atributo obligatorio que es el src que está vacío, que es donde se pone la dirección de nuestra imagen. 
  Después tiene los atributos alt (No obligatorio), que hace descriptiva a nuestra imagen, se utiliza para inclusión a personas no videntes, 
  el atributo id (No obligatoria) con el valos “iml”,
  el atributo name (No obligatoria) con el valor “iml”, 
  el atributo width (No obligatorio) (Indica el ancho que tiene que ocupar en pantalla) con el valor “32”, 
  el atributo height (No obligatorio) (Indica la altura que tiene que ocupar en pantalla) con el valor de “32” y 
  el atributo longdesc (No obligatorio) con el valor “detalles.htm”

## d) <meta name="keywords" lang="es" content="casa, compra, venta, alquiler " />
      <meta http-equiv="expires" content="16-Sep-2019 7:49 PM" />
  La etiqueta < meta > la encontramos dentro del < head >, y proporciona palabras clave relacionadas con el contenido de la página
  el atributo name (Obligatorio para este uso) con el valor "keywords,
  el atributo lang (No obligatorio) con el valor "es" (idioma del contenido),
  el atributo content (Obligatoriio) con el valor "casa, compra, venta, alquiler" (lista de palabras clave separadas),

  el atributo http-equiv (Obligatorio para este uso) con el valor "expires" (Simula encabezado HTTTP para control de caché)
  el atributo content (Obligatorio) con el valor "16-Sep-2019 7:49 PM" (Fecha de expiracion en formato GMT) 

## e) < a href="http://www.e-style.com.ar/resumen.html" type="text/html" hreflang="es" charset="utf-8" rel="help">Resumen HTML < /a >
  La etiqueta < a > se coloca dentro del < body >, es la etiqueta para mostrar un enlace en el contenido de la pagina
  el atributo href (Obligatorio) con el valor "http://www.e-style.com.ar/resumen.html" (URL del destino de enlace)
  el atributo type (No obligatorio) con el valor "text/html" (indica el tipo MIME del recurso vinculado)
  el atributo hreflang (No obligatorio) con el valor "es" (define el idioma del documento enlazado)
  el atributo charset (No obligatorio) con el valor "utf-8" (obsoleto en HTML5)
  el atributo rel (No obligatorio) con el valor "help" (indica que el enlace llava a documentacion de ayuda)

## f) < table width="200" summary="Datos correspondientes al ejercicio vencido" >
              <caption align="top"> Título </caption>
              <tr>
                  <th scope="col">&nbsp;</th>
                  <th scope="col">A</th>
                  <th scope="col">B</th>
                  <th scope="col">C</th>
              </tr>
              <tr>
                  <th scope="row">1º</th>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
              </tr>
              <tr>
                  <th scope="row">2º</th>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
              </tr>
      </table>

  La etiqueta < table > y toda la estructura del ejercicio se encuentra dentro de la seccion de < body >, lo que hace es crear una tabla con estructura
  el atributo width (No obligatorio) con el valor "200" (ancho fijo de la tabla en pixeles)
  el atributo summary (No obligatorio) con el valor "Datos correspondientes al ejercicio vencido" (Descripcion accesible para lectores de pantalla)
  el atributo caption (No obligatorio) con el valor align = "top" (lo posiciona arriba al titulo)

  < tr > la etiqueta de fila de la tabla
  < th > etiqueta de celda de encabezado
  < td > celda de datos vacía

  el atributo scope (No obligatorio) con el valor "col" o "row" (Es recomendado para la accesibilidad)
  el atributo &nbsp inserta un espacio en blanco
  
  
