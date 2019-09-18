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
    <script>
        window.addEventListener('load', function load() {
            const loader = document.getElementById('loader');
            setTimeout(function() {
                loader.classList.add('fadeOut');
            }, 300);
        });
    </script>
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
                     {if isset($smarty.session.nombre)}
                        
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                                <div class="peer mR-10"><img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/10.jpg" alt=""></div>
                                <div class="peer"><span class="fsz-sm c-grey-900">{$smarty.session.nombre}  {$smarty.session.nick}-(1)</span></div>
                            </a>
                            <ul class="dropdown-menu fsz-sm">
                           
                                <li><a href="?view=registro" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-settings mR-10"></i> <span>Registrar</span></a></li>
                                <li><a href="?view=lista"class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-user mR-10"></i> <span>Ver</span></a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="?view=logout" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-power-off mR-10"></i> <span>Salir</span></a></li>
                            </ul>
                        </li>
                    {/if}
                    </ul>
                </div>
            </div>



            
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                                    <h4 class="c-grey-900 mB-20">ADMIN USERS</h4>
                                    <div class="mT-30">
                                                 
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
                                                                              <label for="exampleInputPassword1">TITULO DE OBRAS</label>
                                                                              <input type="text" class="form-control" id="nombre" placeholder="">
                                                                          </div>
                                                                      
                                                                          <div class="form-group">
                                                                              <label for="exampleInputEmail1">TIPO DE OBRAS</label>                                         
                                                                                    <select id="tipo" class="form-control">                                                                                    
                                                                                        <option value="Obras_Principales" >Obras_Principales</option>
                                                                                        <option value="Obras_Entregadas">Obras_Entregadas</option>
                                                                                        <option value="Obras_en_Ejecucion">Obras_en_Ejecucion</option>
                                                                                        <option value="Obras_en_Proyecto">Obras_en_Proyecto</option>
                                                                                    </select>                                                              

                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="exampleInputPassword1">DESCRIPCIÓN</label>
                                                                              <input type="text" class="form-control" id="descripcion" placeholder="">
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="exampleInputPassword1">DIRECCIÓN</label>
                                                                              <input type="text" class="form-control" id="direccion" placeholder="">
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="exampleInputPassword1">TELÉFONO</label>
                                                                              <input type="text" class="form-control" id="telefono" placeholder="">
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="exampleInputPassword1">PÁGINA WEB</label>
                                                                              <input type="text" class="form-control" id="pagina" placeholder="">
                                                                          </div>
                                                                          <div class="form-group">
                                                                              <label for="exampleInputPassword1">LOGO</label> <br>
                                                                                 
                                                                                <input id="fileinput" type="file" accept="image/gif, image/jpeg, image/png" onchange="readURL(this);" /> 
                                                                               
                                                                                <img class="logo"id="logo"src="smiley.gif"  height="100" width="100">
                                                                          </div>
                                                                                                

                                                                          
                                                                      </div>                                                              
                                                              
                                                              
                                                              
                                                              </div>
                                                              <div class="modal-footer">
                                                                  <button type="button" class="btn btn-secondary " data-dismiss="modal">Crrar</button>
                                                                  <button id="actualizar"type="button" onclick="ActualizarDirectorio();" class="btn btn-primary ">Actualizar</button>
                                                                  <button id="registrar"type="button" onclick="RegistrarDirectorio();" class="btn btn-primary ">Registrar</button>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                     <center>
                                              <div id="_AJAX_" class="mT-30">
                                                      
                                              </div>
                                  
                                             <button onclick="Mostrar();" type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal" >Registrar Nuevo Directorio</button>
                                              <h6 class="c-grey-900"></h6>
                                              
                                      
                                    
                                    </center>
                                    <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                   
                                   
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>EMPRESA</th>                                                
                                                <th>TIPO</th>
                                                <th>DESCRIP..</th>
                                                <th>DIRECCIÓN</th> 
                                                <th>TELÉFONO</th>
                                                <th>PÁGINA</th>
                                                <th>LOGO</th>    
                                                <th>-</th>                                             
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>EMPRESA</th>                                                
                                                <th>TIPO</th>
                                                <th>DESCRIP..</th>
                                                <th>DIRECCIÓN</th>
                                                <th>TELÉFONO</th>
                                                <th>PÁGINA</th>
                                                <th>LOGO</th> 
                                                <th>-</th>                                                 
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                         {foreach from=$posts item=tp}   
                                            <tr>
                                                <td>{$tp.id}</td>
                                                <td>{$tp.nombre}</td>
                                                <td>{$tp.tipo}</td>
                                                <td>{$tp.descripcion}</td>          
                                                <td>{$tp.direccion}</td>
                                                <td>{$tp.telefono}</td>
                                                <td>{$tp.pagina}</td>
                                                <td><img class="logotable"id="logo"src="{$tp.imagen}"  height="50" width="50"></td>     
                                                <td>
                                                <button type="button" onclick="EditarDirectorio({$tp.id},'{$tp.nombre}','{$tp.tipo}','{$tp.descripcion}','{$tp.direccion}','{$tp.telefono}','{$tp.pagina}','{$tp.imagen}');"id="boton-edit"class="boton-edit btn cur-p btn-primary ti-pencil"data-toggle="modal" data-target="#exampleModal"></button>                                                
                                                <button type="button" onclick="EliminarDirectorio({$tp.id},'{$tp.nombre}');"class="boton-delete btn cur-p btn-danger ti-close"></button>
                                                
                                                </td>                                     
                                            </tr>
                                        {/foreach}  
                                        </tbody>
                                    </table>



                                      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.js"></script>
                                        <script type="text/javascript">
                                            function readURL(input) {
                                                if (input.files && input.files[0]) {
                                                    var reader = new FileReader();
                                                    reader.onload = function (e) {
                                                        $('#falseinput').attr('src', e.target.result);      
                                                                                                       
                                                        document.getElementById("logo").src=e.target.result;
                                            

                                                    };
                                                    reader.readAsDataURL(input.files[0]);
                                                }
                                            }
                                            function EditarDirectorio(id,nombre,tipo,descripcion,direccion,telefono,pagina,imagen){
                                                //alert(nombre);
                                                 document.getElementById('registrar').style.display = 'none';
                                                 document.getElementById('actualizar').style.display = 'block';

                                                 document.getElementById("id").value=id;
                                                 document.getElementById("nombre").value=nombre;                                  
	                                             $("#tipo option[value="+ tipo +"]").attr("selected",true);
                                                 document.getElementById("descripcion").value=descripcion;
                                                 document.getElementById("direccion").value=direccion;
                                                 document.getElementById("telefono").value=telefono;
                                                 document.getElementById("pagina").value=pagina;
                                                 document.getElementById("logo").src=imagen; 
                                                 
                                            }
                                            function Mostrar(){
                                                //alert("mostra");
                                                document.getElementById('registrar').style.display = 'block';
                                                document.getElementById("actualizar").style.display='none';
                                            }
                                            function ActualizarDirectorio(){

                                               // alert("actualizando");
                                               
                                                 var nombre   = document.getElementById("nombre").value;
                                                
                                       
                                                 var parametros = {
                                                      "id" : document.getElementById("id").value,
                                                      "nombre":document.getElementById("nombre").value,
                                                      "tipo":document.getElementById("tipo").value,
                                                      "descripcion":document.getElementById("descripcion").value,
                                                      "direccion":document.getElementById("direccion").value,
                                                      "telefono":document.getElementById("telefono").value,
                                                      "pagina":document.getElementById("pagina").value,
                                                      "logo":$("#logo").prop("src")

                                                   };
                                             

                                                   var opcion = confirm("Desea Editar directorio de la empresa  "+nombre+" ?");
                                                   if (opcion == true) {
                                                       $.ajax({
                                                            data:  parametros, //  connect.open('POST','?view=registro',true);
                                                            url:   '?view=EditDirectorio', //archivo que recibe la peticion
                                                            type:  'post', //método de envio
                                                            beforeSend: function () {
                                                                   document.getElementById('_AJAX_').innerHTML='<div class="alert alert-success" role="alert">Procesando, espere por favor...</div>';
                                                            },
                                                            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                                                           // alert(response);
                                                                          if(response==1){
                                                                            document.getElementById('_AJAX_').innerHTML='<div class="alert alert-success" role="alert">Directorio '+nombre+' Editado.</div>';
                                                                            location.href= '?view=directorio';
                                                                          } 
                                                                          else{
                                                                            document.getElementById('_AJAX_').innerHTML='<div class="alert alert-danger" role="alert">'+response+'</div>';
                                                                          } 
                                                                          
                                                                    }
                                                            });

                                                       }else{
                                                      
                                                        }
                                                    
                                            }
                                            function RegistrarDirectorio(){
                                               // alert("registrando");
                                                
                                               // alert("actualizando");
                                               
                                                 var nombre   = document.getElementById("nombre").value;
                                                
                                       
                                                 var parametros = {
                                                     // "id" : document.getElementById("id").value,
                                                      "nombre":document.getElementById("nombre").value,
                                                      "tipo":document.getElementById("tipo").value,
                                                      "descripcion":document.getElementById("descripcion").value,
                                                      "direccion":document.getElementById("direccion").value,
                                                      "telefono":document.getElementById("telefono").value,
                                                      "pagina":document.getElementById("pagina").value,
                                                      "logo":$("#logo").prop("src")

                                                   };
                                             

                                                   var opcion = confirm("Desea registrar directorio de la empresa  "+nombre+" ?");
                                                   if (opcion == true) {
                                                       $.ajax({
                                                            data:  parametros, //  connect.open('POST','?view=registro',true);
                                                            url:   '?view=InsertDirectorio', //archivo que recibe la peticion
                                                            type:  'post', //método de envio
                                                            beforeSend: function () {
                                                                   document.getElementById('_AJAX_').innerHTML='<div class="alert alert-success" role="alert">Procesando, espere por favor...</div>';
                                                            },
                                                            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                                                           // alert(response);
                                                                          if(response==1){
                                                                            document.getElementById('_AJAX_').innerHTML='<div class="alert alert-success" role="alert">Directorio '+nombre+' registrado.</div>';
                                                                            location.href= '?view=directorio';
                                                                          } 
                                                                          else{
                                                                            document.getElementById('_AJAX_').innerHTML='<div class="alert alert-danger" role="alert">'+response+'</div>';
                                                                          } 
                                                                          
                                                                    }
                                                            });

                                                       }else{
                                                      
                                                        }
                                            }
                                            
                                        </script>
                                      





                                </div>
                            </div>
                        </div>
                 
         



        </div>
    </div>
    <script type="text/javascript" src="vendor.js"></script>
    <script type="text/javascript" src="bundle.js"></script>
</body>

</html>