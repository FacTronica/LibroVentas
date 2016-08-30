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
$Archivos["XMLLIBRO"]="76311607-7_2016-05-29.xml";

####### CARATULA #######
# Rut del Emisor (Contribuyente)
$Caratula["RutEmisorLibro"]="76311607-7";
# Rut de Persona que Envía (Propietario del Certificado que firma)
$Caratula["RutEnvia"]="15132339-1";
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
$Detalle["NroDoc"]["1"]="30";
$Detalle["Anulado"]["1"]=""; # A=indica que el documento se encuentra Anulado 
$Detalle["TpoImp"]["1"]="1";
$Detalle["TasaImp"]["1"]="19";
$Detalle["FchDoc"]["1"]="2016-05-28";
$Detalle["CdgSIISucur"]["1"]="123123";
$Detalle["RUTDoc"]["1"]="11111111-1";
$Detalle["RznSoc"]["1"]="CLIENTE 1 LTDA";
$Detalle["TpoDocRef"]["1"]="";
$Detalle["FolioDocRef"]["1"]="";
$Detalle["MntExe"]["1"]="0";
$Detalle["MntNeto"]["1"]="16807";
$Detalle["MntIVA"]["1"]="3193";
$Detalle["MntSinCred"]["1"]="0";
$Detalle["MntTotal"]["1"]="20000";

####### DETALLE ITEM (2) #######
$Detalle["TpoDoc"]["2"]="61";
$Detalle["NroDoc"]["2"]="1";
$Detalle["Anulado"]["1"]="A"; # A=indica que el documento se encuentra Anulado 
$Detalle["TpoImp"]["2"]="1";
$Detalle["TasaImp"]["2"]="19";
$Detalle["FchDoc"]["2"]="2016-05-29";
$Detalle["CdgSIISucur"]["2"]="123123";
$Detalle["RUTDoc"]["2"]="11111111-1";
$Detalle["RznSoc"]["2"]="CLIENTE 1 LTDA";
$Detalle["TpoDocRef"]["2"]="";
$Detalle["FolioDocRef"]["2"]="";
$Detalle["MntExe"]["2"]="0";
$Detalle["MntNeto"]["2"]="8403";
$Detalle["MntIVA"]["2"]="1597";
$Detalle["MntSinCred"]["2"]="0";
$Detalle["MntTotal"]["2"]="10000";

####### DETALLE ITEM (3) #######
$Detalle["TpoDoc"]["3"]="61";
$Detalle["NroDoc"]["3"]="2";
$Detalle["TpoImp"]["3"]="1";
$Detalle["TasaImp"]["3"]="19";
$Detalle["FchDoc"]["3"]="2016-05-29";
$Detalle["CdgSIISucur"]["3"]="123123";
$Detalle["RUTDoc"]["3"]="22222222-2";
$Detalle["RznSoc"]["3"]="CLIENTE 2 LTDA";
$Detalle["TpoDocRef"]["3"]="";
$Detalle["FolioDocRef"]["3"]="";
$Detalle["MntExe"]["3"]="0";
$Detalle["MntNeto"]["3"]="8403";
$Detalle["MntIVA"]["3"]="1597";
$Detalle["MntSinCred"]["3"]="0";
$Detalle["MntTotal"]["3"]="10000";

####### TOTALIZADOR TIPO 33 - FACTURA ELECTRONICA #######
$TotalesPeriodo["TpoDoc"]["33"]="33";
$TotalesPeriodo["TotDoc"]["33"]="1";
$TotalesPeriodo["TotAnulado"]["33"]="1"; // total de folios anulados
$TotalesPeriodo["TpoImp"]["33"]="1";
$TotalesPeriodo["TotMntExe"]["33"]="0";
$TotalesPeriodo["TotMntNeto"]["33"]="16807";
$TotalesPeriodo["TotMntIVA"]["33"]="3193";
$TotalesPeriodo["TotIVAFueraPlazo"]["33"]="0";
$TotalesPeriodo["TotMntTotal"]["33"]="20000";
 
####### TOTALIZADOR TIPO 61 - NOTA DE CREDITO #######
$TotalesPeriodo["TpoDoc"]["61"]="61";
$TotalesPeriodo["TotDoc"]["61"]="4";
$TotalesPeriodo["TotAnulado"]["61"]=""; // total de folios anulados
$TotalesPeriodo["TpoImp"]["61"]="1";
$TotalesPeriodo["TotMntExe"]["61"]="0";
$TotalesPeriodo["TotMntNeto"]["61"]="42016";
$TotalesPeriodo["TotMntIVA"]["61"]="7984";
$TotalesPeriodo["TotIVAFueraPlazo"]["61"]="0";
$TotalesPeriodo["TotMntTotal"]["61"]="50000";

####### CERTIFICADO DIGITAL #######
$certificado["Modulus"]="kEyTxK2IMiygJJv9vfvPl2lZv8CSyzSk5u6b4/xwYGmdWZSfe5Z5mb7UhrBmwird
0QeQG47Jt83VNZCzoVOLkKaSXkOTjxUMnNuqhDr2XhLaCUFE58/NAPIwK352MZlq
s1PmslMIz1Q5GYV/Dfft3xfjdsTtbIgN+xOw4m2Fq/tv6OiZFKrolmHWnzogR05z
0TYv7Iz+/sUqq93XLNNAFQ==";
#
#
$certificado["Exponent"]="AQAB";
#
#
$certificado["X509Certificate"]="MIIGSTCCBTGgAwIBAgIQHJhzSDW/en8OE25fb4Q7RTANBgkqhkiG9w0BAQUFADCB
qDELMAkGA1UEBhMCQ0wxFDASBgNVBAoTC0UtU2lnbiBTLkEuMR8wHQYDVQQLExZT
l7yLLjMAhwDnc+FCRgHqKjSkVci+qOVvjAQ/lL7OINa4pAY0WKOnsEsOpg9SczEh
BGCZrMNv1biIe1Dt74HO/r9HU2fmudjl94OaReUrGuq/YU8knXZBK+vou+OU5IZ5
5M2KN+vkEMIYw1dFbNoTtim7b8aoN+lu1lQdBmg=";
#
#
$certificado["PrivKey"]="-----BEGIN RSA PRIVATE KEY-----
MIIEpAIBAAKCAQEAkEyTxK2IMiygJJv9vfvPl2lZv8CSyzSk5u6b4/xwYGmdWZSf
e5Z5mb7UhrBmwird6y3oWussZiv3YAg6TWofeB1yHXsgh1QdPiRjyHenCY3zDvbJ
4r30QGkCgYAc2/9hJ/6mUru9A8baS0WmF4rGf8kxRsNRAYb4kXiZ26I2JtwqD38b
7tzEW2BbZ0EhXE/KA76QAwHyZXKxBhBbzOKgyhWVm3mzmLWIvcY7EBY0hmPBdlIi
peBseODvQjkbk6eVXJLsIxO7aQ3gUkAo1e5fULUEC/9UBHcyEmFTRA==
-----END RSA PRIVATE KEY-----";
?>
