<?php /* Smarty version 3.1.27, created on 2019-09-09 03:20:41
         compiled from "C:\Users\Erika\Desktop\TRABAJO DE CAMARA DE COMERCIO\CAMARA DE COMERCIO\KEY\root\molle\cpanel\styles\templates\public\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2315d75c5096f2df8_35467806%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bce2c53ccc52ebc0b4d8fb82333b47278fc47055' => 
    array (
      0 => 'C:\\Users\\Erika\\Desktop\\TRABAJO DE CAMARA DE COMERCIO\\CAMARA DE COMERCIO\\KEY\\root\\molle\\cpanel\\styles\\templates\\public\\login.tpl',
      1 => 1567579651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2315d75c5096f2df8_35467806',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5d75c509785157_69902383',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d75c509785157_69902383')) {
function content_5d75c509785157_69902383 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2315d75c5096f2df8_35467806';
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>Sign In</title>
    <style>
        #loader {
            transition: all .3s ease-in-out;
            opacity: 1;
            visibility: visible;
            position: fixed;
            height: 100vh;
            width: 100%;
            background: #fff;
            z-index: 90000
        }
        
        #loader.fadeOut {
            opacity: 0;
            visibility: hidden
        }
        
        .spinner {
            width: 40px;
            height: 40px;
            position: absolute;
            top: calc(50% - 20px);
            left: calc(50% - 20px);
            background-color: #333;
            border-radius: 100%;
            -webkit-animation: sk-scaleout 1s infinite ease-in-out;
            animation: sk-scaleout 1s infinite ease-in-out
        }
        
        @-webkit-keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0)
            }
            100% {
                -webkit-transform: scale(1);
                opacity: 0
            }
        }
        
        @keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 0
            }
        }
    </style>
    <link href="style.css" rel="stylesheet">
</head>

<body class="app">
    <div id="loader">
        <div class="spinner"></div>
    </div>
    <?php echo '<script'; ?>
>
        window.addEventListener('load', function load() {
            const loader = document.getElementById('loader');
            setTimeout(function() {
                loader.classList.add('fadeOut');
            }, 300);
        });
    <?php echo '</script'; ?>
>
    <div class="peers ai-s fxw-nw h-100vh">
        <div class="d-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style="background-image:url(styles/images/bg.jpg)">
            <div class="pos-a centerXY">
                <div class="bgc-white bdrs-50p pos-r" style="width:120px;height:120px"><img class="pos-a centerXY" src="styles/images/logo.png" alt=""></div>
            </div>
        </div>
        <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style="min-width:320px">
            <h4 class="fw-300 c-grey-900 mB-40">Login</h4>
            <div>
            <div id="_AJAX_" class="mT-30">
           
            </div>
                <div class="form-group">
                    <label class="text-normal text-dark">Usuario</label>
                    <input id="usuario" class="form-control" placeholder="datos de usuario">
                </div>
                <div class="form-group">
                    <label class="text-normal text-dark">Contraseña</label>
                    <input id="password" class="form-control" placeholder="contraseña">
                </div>
                <div class="form-group">
                    <div class="peers ai-c jc-sb fxw-nw">
                        <div class="peer">
                            <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                <input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer">
                                <label id="filled-in-box" class="peers peer-greed js-sb ai-c"><span class="peer peer-greed">Recordar</span></label>
                            </div>
                        </div>
                        <div class="peer">
                            <button id="submitBtn"style="background:orange" class="btn waves-effect orange waves-light" type="submit" name="action">login
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
>
  window.onload=function(){
    document.getElementById('submitBtn').onclick=function(){
      var connect,user,pass,session,form,result;
        user=document.getElementById('usuario').value;
        pass=document.getElementById('password').value;
        session=document.getElementById('filled-in-box').checked?true:false;
        form='user='+user+'&pass='+pass+'&session='+session;


        connect = window.XMLHttpRequest ? new XMLHttpRequest() :  ActiveXObject('Microsoft.XMLHTTP');
       

        if(user!=''&&pass!='')
        {
            connect.onreadystatechange =function(){
            if(connect.readyState==4&&connect.status==200){
               // alert(connect.responseText);
                if(parseInt(connect.responseText) ==1){

                    //conecatado con exito
                    //redireccione
                    result='<div class="alert alert-primary" role="alert">Ingresando al sistema</div>';
                    location.href= '?view=admin';
                    document.getElementById('_AJAX_').innerHTML=result;


                }else if (parseInt(connect.responseText)==2) {
                  result='<div class="alert alert-success" role="alert">Conectando...</div>';
                  location.href= '?view=usuario';
                  document.getElementById('_AJAX_').innerHTML=result;

                }
                else{
                   //    error
                   result='<div class="alert alert-danger" role="alert">Usuario incorrecto</div>';
                   document.getElementById('_AJAX_').innerHTML=result;
                  }

            }else if(connect.readyState!=4){
                //procesando....
              result=' <div class="alert alert-info" role="alert">Procesando...</div>';
               document.getElementById('_AJAX_').innerHTML=result;
              }
        }

        connect.open('POST','?view=login',true);
        connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        connect.send(form);
        }
        else
        {
          result='<div class="alert alert-danger" role="alert">Faltan datos.</div>';
         document.getElementById('_AJAX_').innerHTML=result;

        }


    }
  }
  <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="vendor.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="bundle.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
?>