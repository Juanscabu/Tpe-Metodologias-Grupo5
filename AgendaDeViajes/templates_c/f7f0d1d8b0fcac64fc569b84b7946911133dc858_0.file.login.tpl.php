<?php
/* Smarty version 3.1.33, created on 2020-05-27 02:18:11
  from 'C:\xampp\htdocs\proyectos\Tpe-Metodologias-Grupo5\AgendaDeViajes\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ecdb1c3af7470_87074262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7f0d1d8b0fcac64fc569b84b7946911133dc858' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Tpe-Metodologias-Grupo5\\AgendaDeViajes\\templates\\login.tpl',
      1 => 1590492643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecdb1c3af7470_87074262 (Smarty_Internal_Template $_smarty_tpl) {
?> <form method= "POST" action="verifica" class="form-inline" >
        <div class="form-group mx-sm-3">
            <input type="username" class="form-control" name="username" id="username"  placeholder="Usuario">
        </div>
        <div>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        </div class="form-group mx-sm-3">
        <button type="submit" class="btn btn-primary">Login</button>
      <a href="logout" class="btn btn-primary">Logout</a>
       <a href="registro" class="btn btn-primary">Registrarse</a>
    </form>
      
<?php }
}
