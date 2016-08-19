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
En el formato se deben entregar los datos del encabezado de los documentos de venta, los totalizadores por tipo de documento y los datos del certificado para firmar el libro electrónico.

Url con Formato Libro Ventas:<br>
https://github.com/FacTronica/LibroVentas/blob/master/FormatoLibroVenta.php

<h3>Proceso 2: Enviar Archivo Plano</h3>
El archivo de texto plano con el formato para el libro de ventas, se debe enviar al servidor de facturación.
<br>Para realizar este proceso se hace uso de librería opensource CURL.

<br>Enviar archivo desde Consola Windows:
<br>c:\curl\curl.exe --form "archivito=@c:\curl\archivo_plano.txt" http://www.factronica.cl/sdk/index.php

Enviar archivo desde Consola Linux:
<br>curl --form "archivito=@archivo_plano.txt" http://www.factronica.cl/sdk/index.php

<h3>Proceso 3: Recuperar Resultados:</h3>
Consiste en obtener los archivos con resultados.

<br>1.-Archivo xml con Libro de Ventas.
<br>2.-Archivo xml con TrackID de Recepción de Libro por parte del SII.

<br>Si el Envío al SII es automático, se recomienda siempre proceda a recuperar el xml de TrackId y analizarlo.
Solamente si el TrackId es mayor a cero se procede a descargar el Xml con libro e ventas.
 
c:\curl\curl.exe -o c:\curl\ESTADOENVIODTE_133477322_TRACKID_1453694548.xml http://www.factronica.cl/factronica_webservice_servidor/buzon_consultadte/salida/ESTADOENVI53694548.xml
