<?php
/* Smarty version 3.1.33, created on 2020-05-28 01:48:41
  from 'C:\xampp\htdocs\proyectos\Tpe-Metodologias-Grupo5\AgendaDeViajes\templates\alojamientos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ecefc59c93f68_99106112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd041731176093335178e534c1d1f78efe1f38434' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Tpe-Metodologias-Grupo5\\AgendaDeViajes\\templates\\alojamientos.tpl',
      1 => 1590622567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ecefc59c93f68_99106112 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <slide>
 <table class="table table-hover">
    <a href="addAlojamiento/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="btn btn-primary">Agregar</a>
        <tr>
          <td>Hotel</td>
          <td>Personas</td>
          <td>Habitaciones</td>
          <td>Habitacion Singles</td>
          <td>Habitacion Dobles</td>
          <td>Servicio</td>
          <td>Fecha Ingreso</td>
          <td>Fecha Egreso</td>
        </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['alojamientos']->value, 'alojamiento');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['alojamiento']->value) {
?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['alojamiento']->value->hotel;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['alojamiento']->value->cantidad_personas;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['alojamiento']->value->cantidad_habitaciones;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['alojamiento']->value->single;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['alojamiento']->value->doble;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['alojamiento']->value->servicio;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['alojamiento']->value->fecha_ingreso;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['alojamiento']->value->fecha_egreso;?>
</td>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
 </slide>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
