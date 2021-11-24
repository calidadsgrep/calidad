<?php
if($lugar=='GenerarHallazgos'){
echo $lugar;
echo $planauditoria_id;
echo $empresa;
header ("Location: http://calidadsg.com/correoHallazgos.php?planauditoria=$planauditoria_id&lugar=$lugar&empresa=$empresa");
}
if($lugar=='RespuestaHallazgo'){
echo $lugar;
echo $planauditoria_id;
echo $empresa;
header ("Location: http://calidadsg.com/correoHallazgos1.php?planauditoria=$planauditoria_id&lugar=$lugar&empresa=$empresa");
}
if($lugar=='ValidacionHallazgo'){
echo $lugar;
header ("Location: http://calidadsg.com/correoHallazgos2.php?planauditoria=$planauditoria_id&lugar=$lugar&empresa=$empresa");
}
?>