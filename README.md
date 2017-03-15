# LibroVentas
SDK Factronica
Librería para Integración de Libro de Ventas Electrónico con Software Propio.

Para realizar la integración del libro de ventas con su software propio se deben realizar 3 procesos.

<h3>Procesos:</h3>
1.-Generar Archivo Plano con Formato Libro de Ventas.<br>
2.-Enviar Archivo Plano al Servidor de Facturación.<br>
3.-Recuperar Resultados del Envío.<br>

<h3>Proceso 1: Generar Archivo Plano</h3>
Consiste en generar un archivo de texto plano con el formato requerido. 
<br>El archivo plano en este caso lo llamaremos envio_libro.txt
<br>En el formato del archivo de texto plano, se deben entregar los datos del encabezado de los documentos de venta, los totalizadores por tipo de documento y los datos del certificado para firmar el libro electrónico.

Url con Formato Libro Ventas:<br>
https://github.com/FacTronica/LibroVentas/blob/master/FormatoLibroVenta.php

<h3>Proceso 2: Enviar Archivo Plano</h3>
El archivo de texto plano con el formato para el libro de ventas, se debe enviar al servidor de facturación.
<br>Para realizar este proceso se hace uso de librería opensource CURL.

<br>Enviar archivo desde Consola Windows:
<br>c:\curl\curl.exe --form "datos_libroventa=@c:\curl\datos_envio_libroventa.txt" http://www.factronica.cl/servidores/servidor_v727/recibe_txt_libroventa.php

Enviar archivo desde Consola Linux:
<br>curl --form "datos_libroventa=@datos_envio_libroventa.txt" http://www.factronica.cl/servidores/servidor_v727/recibe_txt_libroventa.php

<h3>Proceso 3: Recuperar Resultados:</h3>
Consiste en obtener el archivo xml con el libro de ventas.

<br>Recuperar Xml desde Windows:
<br>c:\curl\curl.exe -o c:\curl\libroventas_777777777_201611.xml http://www.factronica.cl/factronica_webservice_servidor_beta/xml_libroventa/libroventas_777777777_201611.xml

<br>Recuperar Xml desde Linux:
<br>curl -o libroventas_777777777_201611.xml http://www.factronica.cl/factronica_webservice_servidor_beta/xml_libroventa/libroventas_777777777_201611.xml

<br>Documentación Oficial del SII:
Manual para Construcción del Xml Libro de Ventas
<br>http://www.sii.cl/factura_electronica/factura_mercado/formato_iecv.pdf
