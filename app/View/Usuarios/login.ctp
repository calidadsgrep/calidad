<div class="container">
    <br> <br> <br> <br>
    <div class="row login_box">
        <div class="col-md-12 col-xs-12 login_control">
            <?php echo $this->Form->create(""); ?>
            <div class="control">
                <div class="label">Usuario</div>
                <?php echo $this->Form->input("username", array("class" => "form-control", "label" => "")); ?>
            </div>
            <div class="control">
                <div class="label">Password</div>
                <?php echo $this->Form->input("password", array("type" => "password", "class" => "form-control", "label" => "")); ?>
            </div>
            <div align="center">
                <?php
                $options = array(
                    'label' => 'Ingresar',
                    'class' => 'btn btn-orange'
                );
                echo $this->Form->end($options);
                ?>
            </div>
        </div>         
    </div>
</div>
<style type="text/css">
   
    .image-circle{
        border-radius: 50%;
        width: 275px;
        height: 275px;
        border: 4px solid #E1F5FE;
        margin: 10px;
    }

    .login_control{
        background-color:#FFF;
        padding:5px; 
    }

    .control {
        color:#000;
        margin:8px;
    }

    .label {
        color: #01579B;
        font-size: 16px;
        font-weight: 500;
    }
    .login_box{
        background: #0091EA; 
        width:35%;
        position:absolute;
        left:32.5%;
        -webkit-box-shadow: 0px 0px 8px 0px rgba(50, 50, 50, 0.54);
        -moz-box-shadow:    0px 0px 8px 0px rgba(50, 50, 50, 0.54);
        box-shadow:         0px 0px 8px 0px rgba(50, 50, 50, 0.54);
    }

    @media (max-width: 767px) {
        .login_box{
            background: #0091EA;               
            width:100%;
            position:absolute;
            left:3%;
        }
    }
    @media (min-width: 768px) and (max-width: 978px) {
        .login_box{
            background: #0091EA;               
            width:80%;
            position:absolute;
            left:12%;
        }
    }
    .btn-orange{
        background-color: #0091EA;
        color:#FFF !important;
        border-radius: 0px;
        margin: 5px;
        padding: 5px;
        width: 150px;
        font-size: 20px;
        font-weight: inherit;
    }

    .btn-orange:hover {
        background-color: #01579B;
        border-radius: 0px;
        margin: 5px;
        padding: 5px;
        width: 150px;
        font-size: 20px;
        font-weight: inherit;
        color:#FFF !important;
    }

    .line{
        border-bottom : 2px solid #0091EA;
    }

    .outter{
        padding: 20px;
        border: 1px solid rgba(255, 255, 255, 0.29);
        border-radius: 50%;
        width: 300px;
        height: 300px;
    }
    .follow, .follow-twitter, .follow-google-plus, .follow-youtube{
        padding-top:5px;
        color:#FFF !important;
        border: 1px solid white; 
        height: 30px;
        cursor:pointer;
    }

    

</style>