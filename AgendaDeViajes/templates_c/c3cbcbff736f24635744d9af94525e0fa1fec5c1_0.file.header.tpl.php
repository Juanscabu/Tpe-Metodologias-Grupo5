<?php
/* Smarty version 3.1.33, created on 2020-05-24 14:37:30
  from 'C:\xampp\htdocs\proyectos\AgendaDeViajes\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eca6a8a458769_74748673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3cbcbff736f24635744d9af94525e0fa1fec5c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\AgendaDeViajes\\templates\\header.tpl',
      1 => 1590322382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/login.tpl' => 1,
  ),
),false)) {
function content_5eca6a8a458769_74748673 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="en">
<head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
">    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"><?php echo '</script'; ?>
>
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>


<body>
  <contenedor>
    <logo><img src="images/logo.jpg" alt="Logo viajes" class="logo"></logo>
    <navbar>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="Home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="mostrarMisViajes">Mis Viajes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="mostrarAgregarViajes">Agregar Viajes</a>
                </li>
              </ul>
            <?php $_smarty_tpl->_subTemplateRender('file:templates/login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
          </nav>
        </navbar><?php }
}
