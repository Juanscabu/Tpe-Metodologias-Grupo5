<?php
/* Smarty version 3.1.33, created on 2020-05-27 16:14:05
  from 'C:\xampp\htdocs\proyectos\Tpe-Metodologias-Grupo5\AgendaDeViajes\templates\misViajes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ece75add74946_45390529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67435aa40aa7c2d33590baaacccb3dc33a0077fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Tpe-Metodologias-Grupo5\\AgendaDeViajes\\templates\\misViajes.tpl',
      1 => 1590588679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ece75add74946_45390529 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <slide>
    <h1>Viajes en curso</h1>
        <table class="table table-hover">
        <tr>
          <td>nombre</td>
          <td>Fecha Inicio</td>
          <td>Fecha Fin</td>
          <td>Alojamiento</td>
        </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['viajes']->value, 'viaje');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['viaje']->value) {
?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['viaje']->value->nombre;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['viaje']->value->fecha_inicio;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['viaje']->value->fecha_fin;?>
</td>
          <td><a href="mostrarAlojamientos/<?php echo $_smarty_tpl->tpl_vars['viaje']->value->id_viaje;?>
" class="btn btn-primary">Alojamientos</a>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
    </slide>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
