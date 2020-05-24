<?php
/* Smarty version 3.1.33, created on 2020-05-24 15:08:16
  from 'C:\xampp\htdocs\proyectos\AgendaDeViajes\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eca71c0ad69b3_82865355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be75ebe7bb0b7175074d873e1f05f623104fa508' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\AgendaDeViajes\\templates\\footer.tpl',
      1 => 1590325694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eca71c0ad69b3_82865355 (Smarty_Internal_Template $_smarty_tpl) {
?> <listnav class="lista">
      <ul>
        <li><a href="mostrarHome">Home</a></li>
        <li><a href="mostrarMisViajes">Mis Viajes</a></li>
         <li><a href="mostrarAgregarViajes">Agregar Viajes</a></li>
      </ul>
    </listnav>
    <social class="lista">
      <ul class="der">
        <li> <a href="http://www.twitter.com"><img src="images/logotwitter.png" class="logosredes">
            Twitter </a></li>
        <li> <a href="http://www.instagram.com"><img src="images/logoinstagram.png"
              class="logosredes"> Instagram </a></li>
        <li> <a href="http://www.Facebook.com"><img src="images/logofacebook.png" class="logosredes">
            Facebook </a></li>
      </ul>
    </social>
    <pie>
      <p>
        Sitio web realizado por alumnos de TUDAI de la Facultad de Cs. Exactas.
      </p>
    </pie>
  </contenedor>
  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/bootstrap.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
