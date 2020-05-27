<?php
/* Smarty version 3.1.33, created on 2020-05-27 14:12:37
  from 'C:\xampp\htdocs\proyectos\Tpe-Metodologias-Grupo5\AgendaDeViajes\templates\formAgregarAlojamiento.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ece5935a2b798_14544195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aac22858bdf479ecba231d172d74ec7567f2a0e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Tpe-Metodologias-Grupo5\\AgendaDeViajes\\templates\\formAgregarAlojamiento.tpl',
      1 => 1590581160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ece5935a2b798_14544195 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <slide>
        <h2>Cargar un alojamiento</h1>
        <h5>Por favor, complete los siguientes campos para reservar un hotel</h5> 
        <form  class="form-group" method= "POST"  action="addAlojamientoFormulario" >
            <div class="form-group">
                <label for="hotel">Hotel:</label>
                <select class="form-control" name="hotel" id="hotel">
                    <option value="1">Hotel 1</option>
                    <option value="2">Hotel 2</option>
                    <option value="3">Hotel 3</option>
                    <option value="4">Hotel 4</option>
                    <option value="5">Hotel 5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tipo_habitacion">Tipo de habitacion:</label>
                <select class="form-control" name="tipo_habitacion" id="tipo_habitacion">
                    <option value="1">Tipo de habitacion 1</option>
                    <option value="2">Tipo de habitacion 2</option>
                    <option value="3">Tipo de habitacion 3</option>
                    <option value="4">Tipo de habitacion 4</option>
                    <option value="5">Tipo de habitacion 5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="servicio">Servicio:</label>
                <select class="form-control" name="servicio" id="servicio">
                    <option value="1">Tipo de servicio 1</option>
                    <option value="2">Tipo de servicio 2</option>
                    <option value="3">Tipo de servicio 3</option>
                    <option value="4">Tipo de servicio 4</option>
                    <option value="5">Tipo de servicio 5</option>
                </select>
            </div>
            <div>
            <label for="fecha_ingreso">Fecha de ingreso:</label>
                <input type="date" class="form-control" name="fecha_ingreso" id="fecha_ingreso">
            </div>
            <div>
                <label for="fecha_egreso">Fecha de salida:</label>
                <input type="date" class="form-control" name="fecha_egreso" id="fecha_egreso">
            </div>
            
            <button type="submit" class="btn btn-primary">Agregar reserva</button> 
        </form>
    </slide>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
