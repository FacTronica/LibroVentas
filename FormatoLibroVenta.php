<?php
####### CONFIGURACIÓN #######
# Ambiente del SII 1=Producción 0=Pruebas
$Config["Produccion"]="0";
# Indica si el Libro de Enviara Automaticamente al Sii 1=si 0=no
$Config["EnviarSii"]="1";
# Indica si el Libro enviara copia por mail 1=si 0=no
$Config["EnviarMail"]="1";
# Mail Destino
$Config["MailDestino"]="contacto@factronica.cl";

####### DIRECTORIOS Y ARCHIVOS #######
# Directorio Almacen Remoto para Almacenar Xml Libro de Ventas
$CONFACTRONICA["FOLDERFILES"]="track_ids_libroventas";
# Nombre del Xml para almacenar el TrackID que entrega el SII al Recibir el XML Libro
$CONFACTRONICA["TRACKID"]="sutrackid.xml";
# Nombre del Xml con el Libro de Ventas
$Archivos["XMLLIBRO"]="libroventas_777777777_201611.xml";

####### CARATULA #######
# Rut del Emisor (Contribuyente)
$Caratula["RutEmisorLibro"]="77777777-7";
# Rut de Persona que Envía (Propietario del Certificado que firma)
$Caratula["RutEnvia"]="11111111-1";
# Periodo Contable del Libro de Ventas
$Caratula["PeriodoTributario"]="2016-05";
# Fecha de Resolución
$Caratula["FchResol"]="2015-09-29";
# Número de Resolución
$Caratula["NroResol"]="0";
# Tipo de Operación
$Caratula["TipoOperacion"]="VENTA";
#
$Caratula["TipoLibro"]="MENSUAL";
#
$Caratula["TipoEnvio"]="TOTAL";
#
$Caratula["FolioNotificacion"]="";

####### DETALLE ITEM (1) #######
$Detalle["TpoDoc"]["1"]="33";
$Detalle["NroDoc"]["1"]="78778";
$Detalle["Anulado"]["1"]=""; # A=indica que el documento se encuentra Anulado 
$Detalle["TpoImp"]["1"]="1";
$Detalle["TasaImp"]["1"]="19";
$Detalle["FchDoc"]["1"]="2016-05-28";
$Detalle["CdgSIISucur"]["1"]="123123";
$Detalle["RUTDoc"]["1"]="11111111-1";
$Detalle["RznSoc"]["1"]="CLIENTE 1 LTDA";
$Detalle["TpoDocRef"]["1"]="";
$Detalle["FolioDocRef"]["1"]="";
$Detalle["MntExe"]["1"]="";
$Detalle["MntNeto"]["1"]="20000";
$Detalle["MntIVA"]["1"]="3800";
$Detalle["IVARetTotal"]["1"]=""; 
$Detalle["CodIVANoRec"]["1"]="";
$Detalle["MntIVANoRec"]["1"]="";
$Detalle["IVAUsoComun"]["1"]="";
$Detalle["MntSinCred"]["1"]="";
$Detalle["CodImp"]["1"]["27"]="27"; // Otros Impuestos Codigo del Impuesto por ej. 27
$Detalle["TasaImp"]["1"]["27"]="20.5"; // Otros Impuestos Tasa de impuesto 20.5
$Detalle["MntImp"]["1"]["27"]="3402"; //  MOnto del impuestopor ej. 2000
$Detalle["MntTotal"]["1"]="23800";



####### DETALLE ITEM (2) #######
$Detalle["TpoDoc"]["2"]="33";
$Detalle["NroDoc"]["2"]="1";
$Detalle["Anulado"]["2"]=""; # A=indica que el documento se encuentra Anulado 
$Detalle["TpoImp"]["2"]="1";
$Detalle["TasaImp"]["2"]="19";
$Detalle["FchDoc"]["2"]="2016-05-29";
$Detalle["CdgSIISucur"]["2"]="123123";
$Detalle["RUTDoc"]["2"]="11111111-1";
$Detalle["RznSoc"]["2"]="CLIENTE 1 LTDA";
$Detalle["TpoDocRef"]["2"]="";
$Detalle["FolioDocRef"]["2"]="";
$Detalle["MntExe"]["2"]="";
$Detalle["MntNeto"]["2"]="10000";
$Detalle["MntIVA"]["2"]="1900";
$Detalle["IVARetTotal"]["2"]=""; 
$Detalle["CodIVANoRec"]["2"]="";
$Detalle["MntIVANoRec"]["2"]="";
$Detalle["IVAUsoComun"]["2"]="";
$Detalle["MntSinCred"]["2"]="";
$Detalle["CodImp"]["2"]["27"]=""; // Otros Impuestos Codigo del Impuesto por ej. 27
$Detalle["TasaImp"]["2"]["27"]=""; // Otros Impuestos Tasa de impuesto 20.5
$Detalle["MntImp"]["2"]["27"]=""; //  MOnto del impuestopor ej. 2000
$Detalle["MntTotal"]["2"]="11900";


####### TOTALIZADOR TIPO 33 - FACTURA ELECTRONICA #######
$TotalesPeriodo["TpoDoc"]["33"]="33";
$TotalesPeriodo["TotDoc"]["33"]="1";
$TotalesPeriodo["TotAnulado"]["33"]="1"; // total de folios anulados
$TotalesPeriodo["TpoImp"]["33"]="1";
$TotalesPeriodo["TotMntExe"]["33"]="0";
$TotalesPeriodo["TotMntNeto"]["33"]="30000";
$TotalesPeriodo["TotMntIVA"]["33"]="5700";
$TotalesPeriodo["TotIVAFueraPlazo"]["33"]="0";
$TotalesPeriodo["CodImp"]["33"]["27"]="27"; // codigo tipo de impuesto
$TotalesPeriodo["TotMntImp"]["33"]["27"]="3402"; // monto total del impuesto
$TotalesPeriodo["TotMntTotal"]["33"]="35700";
 
 

####### CERTIFICADO DIGITAL #######
$certificado["Modulus"]="modulo del certificado";
#
#
$certificado["Exponent"]="AQAB";
#
#
$certificado["X509Certificate"]="certificado x509";
#
#
$certificado["PrivKey"]="llave privada";
?>
