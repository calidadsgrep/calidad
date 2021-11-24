<div id="content">
<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                
                <li class="sidebar-brand" style="color: #00b0ff; font-size: 3em">
                <div  class="div0">
                     <img class="img" src="<?php echo APP_WWW . 'images/logocalidad().png'; ?>" title="Foto10" alt="Foto10" WIDTH=120 HEIGHT=70 >  
                  
                </div>
                </li>
                <li class="sidebar-brand text-center" style="color: #fff; font-size: 12px">
                   <?php  echo $user['Usuario']['nombres'].' '.$user['Usuario']['apellidos']?>
                </li>
                <?php if($nivel==1):?>
                <li>
                    <a href="<?php echo APP_WWW . 'empresas/index'; ?>" target="contenido"><i class="fa fa-building-o"> </i> Administrar Empresas</a>
                </li>
                <li>
                    <a href="<?php echo APP_WWW . 'usuarios/index'; ?>" target="contenido"><i class="fa fa-users"> </i> Administrar Usuarios</a>
                </li>
                <li>
                    <a href="<?php echo APP_WWW . 'normagenerals/index'; ?>" target="contenido"><i class="fa fa-tasks"> </i> Normas</a>
                </li>
                <?php endif;?>
                
                
                 <?php if($nivel==2):?>
                 <li>
                    <a href="<?php echo APP_WWW . 'empresas/index';?>" target="contenido"><i class="fa fa-building-o"> </i> Empresas Clientes</a>
                 </li>
                  <li>
                    <a href="<?php echo APP_WWW . 'usuarios/index/';?>" target="contenido"><i class="fa fa-user-circle-o"> </i> Auditores</a>
                 </li>
                 <li>
                    <a><strong>Auditorias</strong></a>
                </li>
                 <li>
                    <a href="<?php echo APP_WWW . 'auditorias/asignar'; ?>" target="contenido"><i class="fa fa-buysellads"> </i> Crear Planes de Auditoria</a>
                </li>
                <li>
                    <a href="<?php echo APP_WWW . 'auditorias/index'; ?>" target="contenido"><i class="fa fa-buysellads"> </i> Planes de Auditoria</a>
                </li>
             
                </li>
                <?php endif;?>
                
                <?php if( $nivel==3):?>
                  <li>
                    <a><strong>Auditorias</strong></a>
                </li>
                 <li>
                    <a href="<?php echo APP_WWW . 'auditorias/asignar'; ?>" target="contenido"><i class="fa fa-buysellads"> </i> Crear Planes de Auditoria</a>
                </li>
                <li>
                    <a href="<?php echo APP_WWW . 'auditorias/index'; ?>" target="contenido"><i class="fa fa-buysellads"> </i> Planes de Auditoria</a>
                </li>
             
                </li>
                <?php endif;?>
                
                <?php if($nivel==4):?>
                 <li>
                    <a href="#" target="contenido"><strong>Auditorias</strong></a>
                </li>
                <li>
                    <a href="<?php echo APP_WWW . 'auditorias/index/'.$user['Empresa']['id']; ?>" target="contenido"><i class="fa fa-buysellads"> </i> Programas</a>
                </li>
             
                </li>
                <?php endif;?>
                <li>
                    <a href="<?php echo APP_WWW . 'usuarios/salir'; ?>"><i class="fa fa-sign-out"> </i> Salir</a>
                </li>
                 
                
            </ul>
            <div  class="div1">
                     <img class="img" src="<?php echo APP_WWW . 'images/logocalidad().png'; ?>" title="Foto10" alt="Foto10" WIDTH=120 HEIGHT=70 >  
                  
                </div>
               
            <div  class="div text-center">
                 <a>gerencia@calidad.com<br>Desarrollado por:AOA version 1.0</a>
              
                </div>
        </div>
       <!--  #sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container">
                <a href="#menu-toggle" class="btn btn-success fa fa-bars" aria-hidden="true" id="menu-toggle"></a>
                 <br><br>
                <div class="row">
                    <div class="col-md-12">
                         <iframe width="1203" height="600" allowtransparency="true" frameborder="0" name="contenido" src="bienvenida"></iframe>
                    </div>
                </div>
            </div>
        
		
		
	</div>
        </div>
    </div>

<style>
.div{
    position:absolute;
    bottom:5px;
    right:5px;
}
.div1{
    position:absolute;
    bottom:50px;
    right:50px;
    
}
.div0{
    position:absolute;
    top:0px;
    right:50px;
    
}


</style>
    