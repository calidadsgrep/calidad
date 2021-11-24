<?php
if($lugar=='GenerarHallazgos'){
echo $lugar;
header ("Location: http://calidadsg.com/correoHallazgos.php?planauditoria=$planauditoria_id&lugar=$lugar");
}
if($lugar=='RespuestaHallazgo'){
echo $lugar;
header ("Location: http://calidadsg.com/correoHallazgos1.php?planauditoria=$planauditoria_id&lugar=$lugar");
}
if($lugar=='ValidacionHallazgo'){
echo $lugar;
//header ("Location: http://calidadsg.com/correoHallazgos2.php?planauditoria=$planauditoria_id&lugar=$lugar");
}
?>