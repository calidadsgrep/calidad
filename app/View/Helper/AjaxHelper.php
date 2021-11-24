<?php

App::uses('Helper', 'view/Helper');

class AjaxHelper extends AppHelper {

    function getLoadResource() {
        $script = "<script type='text/javascript'>
                function loadResource(parameter, path, target){
                    var html = \"<img src='" . APP_WWW . "images/ajax.gif" . "' /> \"
                    $('#'+target).empty();
                    $('#'+target).html(html);
                    $('#'+target).load(path + parameter, function(responseTxt, statusTxt, xhr) {
                        if (statusTxt == 'success')
                            $('#'+target).html(responseTxt);
                            $('[rel=tooltip]').tooltip({placement: 'top'});
                        if (statusTxt == 'error')
                            $('#'+target).html('Error: ' + xhr.status + ': ' + xhr.statusText);
                    });
                }
            </script>";
        return $script;
    }
    
    function saveFormAjax(){
        $script = "<script type='text/javascript'>
            function saveForm(objeto){
                    var formData = $(objeto).serialize();
                    var formUrl = $(objeto).attr('action'); 
                    $.ajax({ 
                        type: 'POST', 
                        url: formUrl, 
                        data: formData,
                        dataType: 'json',
                        success: function(data,textStatus,xhr){
                            if(data.status == 1){
                                $('#'+data.target).html(''+data.mns);
                            }else{
                                alert(''+data.mns);
                            }
                        }, 
                        error: function(xhr,textStatus,error){ 
                            alert(textStatus + ':' + error); 
                        } 
                    });	 
                return false;
            }
        </script>";
        return $script;
    }
    
    function getLoadcargos() {
        $script = "<script type='text/javascript'>
                function loadResource(parameter, path, target){
                    var html = \"<img src='' /> \"
                    $('#'+target).empty();
                    $('#'+target).html(html);
                    $('#'+target).load(path + parameter, function(responseTxt, statusTxt, xhr) {
                        if (statusTxt == 'success')
                            $('#'+target).html(responseTxt);
                            $('[rel=tooltip]').tooltip({placement: 'top'});
                        if (statusTxt == 'error')
                            $('#'+target).html('Error: ' + xhr.status + ': ' + xhr.statusText);
                    });
                }
            </script>";
        return $script;
    }

}
?>


