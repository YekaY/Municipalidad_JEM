<?php /* Smarty version 3.1.27, created on 2019-06-18 08:39:20
         compiled from "D:\KEY\root\test\cpanel\styles\templates\home\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:249925d08a3389eeb53_95123565%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8712ed64a854c1a99fa3165cb67b771f47cd83a' => 
    array (
      0 => 'D:\\KEY\\root\\test\\cpanel\\styles\\templates\\home\\index.tpl',
      1 => 1560740990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '249925d08a3389eeb53_95123565',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5d08a338bf1f57_54840315',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5d08a338bf1f57_54840315')) {
function content_5d08a338bf1f57_54840315 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '249925d08a3389eeb53_95123565';
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>Blank</title>
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
                        
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                                <div class="peer mR-10"><img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/10.jpg" alt=""></div>
                                <div class="peer"><span class="fsz-sm c-grey-900">John Doe</span></div>
                            </a>
                            <ul class="dropdown-menu fsz-sm">
                                <li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-settings mR-10"></i> <span>Setting</span></a></li>
                                <li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-user mR-10"></i> <span>Profile</span></a></li>
                                <li><a href="email.html" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-email mR-10"></i> <span>Messages</span></a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-power-off mR-10"></i> <span>Logout</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <main class="main-content bgc-grey-100">
                <div id="mainContent">
                    <div class="full-container">
                    <center><div style="margin-top:25%;"class="peer"><button id="login" type="button" class="btn cur-p btn-primary">INGRESAR AL CPANEL CCA</button></div></center>
                        
                    </div>
                </div>
            </main>
            <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600"><span>--- <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a>. All rights reserved.</span></footer>
        </div>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript" src="vendor.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="bundle.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
  window.onload=function(){
    document.getElementById('login').onclick=function(){
      location.href= '?view=login';
    }
  }
  <?php echo '</script'; ?>
>
</body>

</html><?php }
}
?>