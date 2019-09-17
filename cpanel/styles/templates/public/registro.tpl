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






            <main class="main-content bgc-grey-100">
                <div id="mainContent">
                     <div class="bgc-white p-20 bd">
                                <h6 class="c-grey-900"></h6>
                                <div class="mT-30">
                                    <div>
                                        <div id="_AJAX_" class="mT-30">
                                            
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

                                        <button id="submitBtn"style="background:orange" class="btn waves-effect orange waves-light" type="submit" name="action">REGISTRAR
                                    </div>
                                </div>
                            </div>
                </div>
            </main>
        </div>
    </div>

      <script>
            window.onload=function(){
                document.getElementById('submitBtn').onclick=function(){
                var connect,nombres,correo,nick,password,form,result;
                    nombres=document.getElementById('nombre').value;
                    correo=document.getElementById('correo').value;
                    nick=document.getElementById('usuario').value;
                    password=document.getElementById('password').value;

                    form='nombre='+nombres+'&correo='+correo+'&nick='+nick+'&password='+password;


                    connect = window.XMLHttpRequest ? new XMLHttpRequest() :  ActiveXObject('Microsoft.XMLHTTP');
                //alert(nombres+apellidos+sexo+cargo+usuario+password);

                    if(nombre!=''&&correo!=''&&nick!=''&&password!='')
                    {
                        connect.onreadystatechange =function(){
                        if(connect.readyState==4&&connect.status==200){
                            //alert(connect.responseText);
                            if(parseInt(connect.responseText) ==1){

                                //conecatado con exito
                                //redireccione
                                result='<div class="alert alert-success" role="alert">Registrando...</div>';
                                location.href= '?view=lista';
                                document.getElementById('_AJAX_').innerHTML=result;


                            }else if (parseInt(connect.responseText)==2) {
                            result='<div class="alert alert-danger" role="alert">Registre otros datos.</div>';
                            document.getElementById('_AJAX_').innerHTML=result;

                            }else if (parseInt(connect.responseText)==3) {
                            result='<div class="alert alert-danger" role="alert">El usuario ya existe..</div>';
                            document.getElementById('_AJAX_').innerHTML=result;

                            }else{
                            //    error
                            result='<div class="alert alert-success" role="alert">Los datos ya existen</div>';
                            document.getElementById('_AJAX_').innerHTML=result;
                            }

                        }else if(connect.readyState!=4){
                            //procesando....
                        result=' <div class="alert alert-info" role="alert">Procesando...</div>';
                        document.getElementById('_AJAX_').innerHTML=result;
                        }
                    }

                    connect.open('POST','?view=registro',true);
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



  </script>
    <script type="text/javascript" src="vendor.js"></script>
    <script type="text/javascript" src="bundle.js"></script>
</body>

</html>