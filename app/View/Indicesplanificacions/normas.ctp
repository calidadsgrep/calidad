<div class="col-md-10">
               <h2> Seleccione los numerales de la norma</h2>
               <ul class="nav nav-tabs">
                        <?php foreach ($normagenerals as $value): ?>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $value['Normageneral']['descripcion'];?>
                                <span class="caret"></span></a>
                                
                            <ul class="dropdown-menu">
                                <?php $a = 1;
                                foreach ($value['Subnorma'] as $value1):
                                    ?> 
                                <li><a onclick="loadResource(<?php echo $value1['id']; ?>, '<?php echo APP_WWW . "indicesplanificacions/add/" . $value1['id'] . '/'.$id_planauditoria. '/'.$id_auditoria.'/'?>', 'lista')">
                                <?php echo $value1['numero'] . '- ' . $value1['descripcion']; ?>
                            </a></li>
                                <?php $a++;
                            endforeach; ?>
                            </ul>
                             
                        </li>
                        <?php endforeach; ?>
                    </ul>
               
               <div class="col-md-12" id="lista" name='lista'>
                   
                   
               </div>
                     <br>
                    
                  </div>

    <div class="col-md-6 col-md-offset-2 well-success">
         <br>
          <hr>
          <a href="<?php echo APP_WWW . "planauditorias/asignar3/".$id_auditoria.'/'?>" class="btn btn-success btn-lg btn-block">Generar plan de auditoria para otro proceso</a>
           <a href="<?php echo APP_WWW . 'auditorias/edit/'.$id_auditoria; ?>" class="btn btn-success btn-lg btn-block">Desea terminar y agregar las observaciones</a>
    
    </div>
    </div>
<?php echo $this->Ajax->getLoadResource(); ?>