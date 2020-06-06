<?php
<<<<<<< HEAD
/* Smarty version 3.1.33, created on 2020-05-28 17:38:36
=======
/* Smarty version 3.1.33, created on 2020-05-28 19:04:18
>>>>>>> TPEG5-48
  from 'C:\xampp\htdocs\proyectos\Tpe-Metodologias-Grupo5\AgendaDeViajes\templates\formAgregarAlojamiento.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
<<<<<<< HEAD
  'unifunc' => 'content_5ecfdafc045db9_36389963',
=======
  'unifunc' => 'content_5ecfef1219d667_83211283',
>>>>>>> TPEG5-48
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aac22858bdf479ecba231d172d74ec7567f2a0e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Tpe-Metodologias-Grupo5\\AgendaDeViajes\\templates\\formAgregarAlojamiento.tpl',
<<<<<<< HEAD
      1 => 1590680304,
=======
      1 => 1590685433,
>>>>>>> TPEG5-48
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_5ecfdafc045db9_36389963 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5ecfef1219d667_83211283 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> TPEG5-48
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <slide>
        <h2>Cargar un alojamiento</h1>
        <h5>Por favor, complete los siguientes campos para agregar reserva de hotel</h5> 
        <form  class="form-group" method= "POST"  action="addAlojamientoFormulario" >
            <div class="form-group">
                <input list="hotel" name="hotel" type="text" placeholder="Busque su Hotel">
                <datalist id="hotel">
                    <option value="Hotel Alejandro"></option>
                    <option value="Hotel Alejo"></option>
                    <option value="Hotel Amarillo"></option>
                    <option value="Hotel Blanco"></option>
                    <option value="Hotel Negro"></option>
                    <option value="Hotel Azul"></option>
                    <option value="Hotel Marrón"></option>
                    <option value="Hotel Naranja"></option>
                    <option value="Hotel Verde"></option>
                </datalist>
            </div>
            <div class="form-group">
                <label for="cantidad_personas">Cuantas personas?</label>
                <input type="number" id="cantidad_personas" name="cantidad_personas">
            </div>
             <div class="form-group">
                <label for="cantidad_cantidad_habitaciones">Cuantas habitaciones?</label>
                <input type="number" id="cantidad_habitaciones" name="cantidad_habitaciones">
            </div>
            <div class="form-group">
                <label for="single">Habitaciones Singles:</label>
                <input type="number" id="single" name="single">
            
             <div class="form-group">
                 <label for="doble">Habitaciones Dobles:</label>
                <input type="number" id="doble" name="doble">
            </div>
           <label for="single">Servicios:</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="gimnasio" name="servicios[]" id="check1">
                    <label class="form-check-label" for="defaultCheck1">
                        Gimnasio
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="desayuno" name="servicios[]" id="check2">
                    <label class="form-check-label" for="defaultCheck1">
                        Desayuno
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="limpieza" name="servicios[]" id="check3">
                    <label class="form-check-label" for="defaultCheck1">
                        Limpieza
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="pileta" name="servicios[]" id="check4">
                    <label class="form-check-label" for="defaultCheck1">
                        Pileta
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="sauna" name="servicios[]" id="check5">
                    <label class="form-check-label" for="defaultCheck1">
                        Sauna
                </label>
            </div>
            <div>
            <div>
                <label for="fecha_ingreso">Fecha de ingreso:</label>
                <input type="date" class="form-control" name="fecha_ingreso" id="fecha_ingreso">
            </div>
            <div>
                <label for="fecha_egreso">Fecha de salida:</label>
                <input type="date" class="form-control" name="fecha_egreso" id="fecha_egreso">
            </div>
            <input type="text" class="d-none" name="idViaje" id="idViaje" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
            <button type="submit" class="btn btn-primary">Agregar reserva</button> 
        </form>
    </slide>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
