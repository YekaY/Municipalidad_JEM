<?php /* Smarty version 3.1.27, created on 2019-06-18 08:41:46
         compiled from "D:\KEY\root\test\cpanel\styles\templates\public\lista.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:309695d08a3cae054f6_89996529%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fac19effad61e4dbc2c68f555b556b63b65d4eeb' => 
    array (
      0 => 'D:\\KEY\\root\\test\\cpanel\\styles\\templates\\public\\lista.tpl',
      1 => 1560846411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '309695d08a3cae054f6_89996529',
  'variables' => 
  array (
    'posts' => 0,
    'tp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5d08a3caea7ae0_62967208',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d08a3caea7ae0_62967208')) {
function content_5d08a3caea7ae0_62967208 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '309695d08a3cae054f6_89996529';
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>Dashboard</title>
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
    <div>
        <div class="sidebar">
            <div class="sidebar-inner">
                <div class="sidebar-logo">
                    <div class="peers ai-c fxw-nw">
                        <div class="peer peer-greed">
                            <a class="sidebar-link td-n" href="index.html">
                                <div class="peers ai-c fxw-nw">
                                    <div class="peer">
                                        <div class="logo"><img src="assets/static/images/logo.png" alt=""></div>
                                    </div>
                                    <div class="peer peer-greed">
                                        <h5 class="lh-1 mB-0 logo-text">Adminator</h5></div>
                                </div>
                            </a>
                        </div>
                        <div class="peer">
                            <div class="mobile-toggle sidebar-toggle"><a href="" class="td-n"><i class="ti-arrow-circle-left"></i></a></div>
                        </div>
                    </div>
                </div>
                <ul class="sidebar-menu scrollable pos-r">
                    <li class="nav-item mT-30 actived"><a class="sidebar-link" href="?view=directorio"><span class="icon-holder"><i class="c-blue-500 ti-home"></i> </span><span class="title">Directorio</span></a></li>
                    <li class="nav-item"><a class="sidebar-link" href="email.html"><span class="icon-holder"><i class="c-brown-500 ti-email"></i> </span><span class="title">Calendario</span></a></li>
                    <li class="nav-item"><a class="sidebar-link" href="compose.html"><span class="icon-holder"><i class="c-blue-500 ti-share"></i> </span><span class="title">Revistas</span></a></li>
                    
                </ul>
            </div>
        </div>
        <div class="page-container">
            <div class="header navbar">
                <div class="header-container">
                    <ul class="nav-left">
                        <li><a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);"><i class="ti-menu"></i></a></li>
                        <li class="search-box"><a class="search-toggle no-pdd-right" href="javascript:void(0);"><i class="search-icon ti-search pdd-right-10"></i> <i class="search-icon-close ti-close pdd-right-10"></i></a></li>
                        <li class="search-input">
                            <input class="form-control" type="text" placeholder="Search...">
                        </li>
                    </ul>
                    <ul class="nav-right">
                     <?php if (isset($_SESSION['nombre'])) {?>
                        
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                                <div class="peer mR-10"><img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/10.jpg" alt=""></div>
                                <div class="peer"><span class="fsz-sm c-grey-900"><?php echo $_SESSION['nombre'];?>
  <?php echo $_SESSION['nick'];?>
-(1)</span></div>
                            </a>
                            <ul class="dropdown-menu fsz-sm">
                           
                                <li><a href="?view=registro" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-settings mR-10"></i> <span>Registrar</span></a></li>
                                <li><a href="?view=lista"class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-user mR-10"></i> <span>Ver</span></a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="?view=logout" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-power-off mR-10"></i> <span>Salir</span></a></li>
                            </ul>
                        </li>
                    <?php }?>
                    </ul>
                </div>
            </div>



            
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                                    <h4 class="c-grey-900 mB-20">ADMIN USERS</h4>
                                     <center>
                                              <div id="_AJAX_" class="mT-30">
                                                      
                                              </div>
                                  
                               
                                              <h6 class="c-grey-900"></h6>
                                              <div class="mT-30">
                                                  <button onclick="Redirect();" type="button" class="btn btn-primary "  >Registar administrador</button>
                                                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog" role="document">
                                                          <div class="modal-content">
                                                              <div class="modal-header">
                                                                  <h5 class="modal-title" id="exampleModalLabel">Registrar Administrador</h5>
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                              </div>
                                                              <div class="modal-body">

                                                                    <div>
                                                                          <div id="_AJAX_" class="mT-30">
                                                                              
                                                                          </div>
                                                                          <div class="form-group" >
                                                                              <label for="exampleInputPassword1">ID</label>
                                                                              <input type="text" class="form-control" id="id" disabled="disabled">
                                                                          </div>

                                                                          <div class="form-group">
                                                                              <label for="exampleInputPassword1">NOMBRE DE USUARIO</label>
                                                                              <input type="text" class="form-control" id="nombre" placeholder="Nombre de usuario">
                                                                          </div>
                                                                      
                                                                          <div class="form-group">
                                                                              <label for="exampleInputEmail1">EMAIL</label>
                                                                              <input type="email" class="form-control" id="correo" aria-describedby="emailHelp" placeholder="Enter email"> <small id="emailHelp" class="form-text text-muted">Correo</small>
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="exampleInputPassword1">USUARIO</label>
                                                                              <input type="text" class="form-control" id="usuario" placeholder="Nombre de usuario">
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="exampleInputPassword1">CONTRASEÑA</label>
                                                                              <input type="password" class="form-control" id="password" placeholder="Password">
                                                                          </div>                       

                                                                          
                                                                      </div>                                                              
                                                              
                                                              
                                                              
                                                              </div>
                                                              <div class="modal-footer">
                                                                  <button type="button" class="btn btn-secondary " data-dismiss="modal">Crrar</button>
                                                                  <button type="button" onclick="Actualizar();" class="btn btn-primary ">Actualizar</button>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                      
                                    
                                    </center>
                                    <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                   
                                   
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>NOMBRES</th>                                                
                                                <th>CORREO</th>
                                                <th>NICK</th>
                                                <th>FECHA</th> 
                                                <th>OPERACIÓN</th>                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>NOMBRES</th>                                                
                                                <th>CORREO</th>
                                                <th>NICK</th>
                                                <th>FECHA</th>
                                                <th>OPERACIÓN</th>                                                 
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                         <?php
$_from = $_smarty_tpl->tpl_vars['posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tp'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tp']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tp']->value) {
$_smarty_tpl->tpl_vars['tp']->_loop = true;
$foreach_tp_Sav = $_smarty_tpl->tpl_vars['tp'];
?>   
                                            <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['id'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['nombre'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['correo'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['nick'];?>
</td>          
                                                <td><?php echo $_smarty_tpl->tpl_vars['tp']->value['fecha'];?>
</td>     
                                                <td>
                                                <button type="button" onclick="Editar(<?php echo $_smarty_tpl->tpl_vars['tp']->value['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['tp']->value['nombre'];?>
','<?php echo $_smarty_tpl->tpl_vars['tp']->value['correo'];?>
','<?php echo $_smarty_tpl->tpl_vars['tp']->value['nick'];?>
');"id="boton-edit"class="boton-edit btn cur-p btn-primary ti-pencil"data-toggle="modal" data-target="#exampleModal"></button>                                                
                                                <button type="button" onclick="Eliminar(<?php echo $_smarty_tpl->tpl_vars['tp']->value['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['tp']->value['nombre'];?>
');"class="boton-delete btn cur-p btn-danger ti-close"></button>
                                                
                                                </td>                                     
                                            </tr>
                                        <?php
$_smarty_tpl->tpl_vars['tp'] = $foreach_tp_Sav;
}
?>  
                                        </tbody>
                                    </table>



                                      <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
 
                                      <?php echo '<script'; ?>
>
                                      $(document).ready(function(){
                                          $(".boton-editt").click(function(){
                                  
                                              var valores="";
                                  
                                              // Obtenemos todos los valores contenidos en los <td> de la fila
                                              // seleccionada
                                              var contador =0;
                                              $(this).parents("tr").find("td").each(function(){
                                                contador++;
                                                  valores+=$(this).html()+"-"+contador+"\n";
                                              });
                                  
                                              alert(valores+"edit");
                                          });

                                          $(".boton-deletet").click(function(){
                                  
                                             
                                          });
                                      });


                                      function Eliminar(val1,val2){
                                        
                                              var parametros = {
                                                      "id" : val1
                                              };

                                              var opcion = confirm("Desea eliminar al Administrador "+val2+" ?");
                                               if (opcion == true) 
                                               {
                                                      $.ajax({
                                                            data:  parametros, //  connect.open('POST','?view=registro',true);
                                                            url:   '?view=deleteUser', //archivo que recibe la peticion
                                                            type:  'post', //método de envio
                                                            beforeSend: function () {
                                                                    $("#resultado").html("Procesando, espere por favor...");
                                                            },
                                                            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                                                                          if(response==1){
                                                                            document.getElementById('_AJAX_').innerHTML='<div class="alert alert-success" role="alert">Usuario '+val2+' Eliminado.</div>';
                                                                            location.href= '?view=lista';
                                                                          } 
                                                                          if(response==2){
                                                                            document.getElementById('_AJAX_').innerHTML='<div class="alert alert-danger" role="alert">Error al eliminart</div>';
                                                                          } 
                                                                          
                                                                    }
                                                            });
                                                               
                                                } 
                                                else 
                                                {
                                                                   
                                                }                                              
                                      }
                                      function Editar(id,nombre,email,usuario){
                                        //alert(email);
                                        document.getElementById("id").value=id;
                                        document.getElementById("nombre").value=nombre;
                                        document.getElementById("correo").value=email;
                                        document.getElementById("usuario").value=usuario;
                                        document.getElementById("password").value="";

                                      }
                                      function Actualizar(){
                                       // var id       = document.getElementById("id").value;
                                        var nombre   = document.getElementById("nombre").value;
                                       // var correo   = document.getElementById("correo").value;
                                       // var usuario  = document.getElementById("usuario").value;
                                       // var password = document.getElementById("password").value;
                                        var parametros = {
                                                      "id" : document.getElementById("id").value,
                                                      "nombre":document.getElementById("nombre").value,
                                                      "correo":document.getElementById("correo").value,
                                                      "usuario":document.getElementById("usuario").value,
                                                      "password":document.getElementById("password").value,
                                              };
                                             

                                              var opcion = confirm("Desea Editar al Administrador "+nombre+" ?");
                                               if (opcion == true) 
                                               {
                                                      $.ajax({
                                                            data:  parametros, //  connect.open('POST','?view=registro',true);
                                                            url:   '?view=EditUser', //archivo que recibe la peticion
                                                            type:  'post', //método de envio
                                                            beforeSend: function () {
                                                                    $("#resultado").html("Procesando, espere por favor...");
                                                            },
                                                            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                                                            //alert(response);
                                                                          if(response==1){
                                                                            document.getElementById('_AJAX_').innerHTML='<div class="alert alert-success" role="alert">Usuario '+nombre+' Editado.</div>';
                                                                            location.href= '?view=lista';
                                                                          } 
                                                                          else{
                                                                            document.getElementById('_AJAX_').innerHTML='<div class="alert alert-danger" role="alert">'+response+'</div>';
                                                                          } 
                                                                          
                                                                    }
                                                            });
                                                               
                                                } 
                                                else 
                                                {
                                                                   
                                                } 
                                        
                                      }
                                      function Redirect(){
                                         location.href= '?view=registro';
                                      }
                                      <?php echo '</script'; ?>
>
                                      





                                </div>
                            </div>
                        </div>
                 
         



        </div>
    </div>
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