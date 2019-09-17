<?php /* Smarty version 3.1.27, created on 2019-07-08 07:29:38
         compiled from "D:\KEY\root\test\cpanel\styles\templates\public\admin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:62155d22f0e236a867_13806255%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35872295d152deba8e9ad5bb86cb91119999a290' => 
    array (
      0 => 'D:\\KEY\\root\\test\\cpanel\\styles\\templates\\public\\admin.tpl',
      1 => 1562570975,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62155d22f0e236a867_13806255',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5d22f0e23c6cf6_16300571',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d22f0e23c6cf6_16300571')) {
function content_5d22f0e23c6cf6_16300571 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '62155d22f0e236a867_13806255';
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
                    <li class="nav-item"><a class="sidebar-link" href="?view=actividad"><span class="icon-holder"><i class="c-brown-500 ti-email"></i> </span><span class="title">Actividades</span></a></li>
                    <li class="nav-item"><a class="sidebar-link" href="#"><span class="icon-holder"><i class="c-blue-500 ti-share"></i> </span><span class="title">revistas</span></a></li>
                    <li class="nav-item"><a class="sidebar-link" href="#"><span class="icon-holder"><i class="c-blue-500 ti-share"></i> </span><span class="title">Noticias</span></a></li>
                    
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