# Ejercico 1
## Qué es HTML, cuando fue creado, cuáles fueron las distintas versiones y cuál es la última?
  - HTML (HyperText Markup Language) es el lenguaje estándar para crear páginas web.
  - Creado en 1991 por Tim Berners-Lee
  - Sus versiones principales HTML 2.0 (1995), HTML 3.2 (1997), HTML 4.01 (1999), XHTML (2000), HTML5 (2014, Version actual)

## ¿Cuáles son los principios básicos que el W3C recomienda seguir para la creación de documentos con HTML?
  - Usar etiquetas adecuadas, para dar significado al contenido
  - Dividir contenido (HTML), diseño (CSS), y comportamiento (JS)
  - Garantizar que el sitio sea usable para todos (Accesibilidad)

## En las Especificaciones de HTML, ¿cuándo un elemento o atributo se considera desaprobado? ¿y obsoleto?
  - Un elemento o atributo se considera desaprobado cuando aún funciona, pero se considera mala practica y puede dejar de funcionar en futuras versiones.
  - Un elemento o atributo se considera obsoleto cuando está eliminado del estandar y es incopatible. Los navegadores pueden ignorarlo o no renderizarlo correctamente.

## ¿Qué es el DTD y cuáles son los posibles DTDs contemplados en la especificación de HTML 4.01? 
  - El DTD (Documento Type Definition) define la estructura y los elementos permitidos en un documento HTML, indicando la version del lenguaje que se está utilizando.
  - Se declara al inicio del documento con <!DOCTYPE>
  - HTML 4.01 especifica 3 tipos de DTDs. 
    - html 4.01 Strict -> Elimina elementos y atributos obsoletos, exige separacion entre HTML y CSS.
    - html 4.01 Transitional -> Permite el uso de elementos y atributos desaprobados, Diseñado para migrar gradualmente a estándares modernos.
    - html 4.01 Frameset -> Similar a _Transitional_, pero incluye soporte para frames.

## ¿Qué son los metadatos y cómo se especifican en HTML?
  - Los metadatos son información sobre el documento HTML que no se muestra directamente en la pagina, pero esencial para los navegadores, motores de busqueda (SEO).
  - Incluyen detalles como: Titulo, autor y descripcion, codificaciones de caracteres, instrucciones para navegadores.
  - Se definen dentro de la etiqueta <head> principalmente con estas etiquetas:
    - < title >
    - < meta >
    - < link >
    - < script > y < styles >
