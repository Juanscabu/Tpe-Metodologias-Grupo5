{include 'templates/header.tpl'}
    <slide>
        <h2>Cargar un alojamiento</h1>
        <h5><a href="addAlojamientoMail">Click aqui para cargar via mail</a></h5>
        <h5>Por favor, complete los siguientes campos para reservar un hotel</h5> 
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
            <div class="form-group">
                <label for="servicio">Servicio:</label>
                <div></div>
               <input type="text" id="servicio" name="servicio">
            </div>
            <div>
                <label for="fecha_ingreso">Fecha de ingreso:</label>
                <input type="date" class="form-control" name="fecha_ingreso" id="fecha_ingreso">
            </div>
            <div>
                <label for="fecha_egreso">Fecha de salida:</label>
                <input type="date" class="form-control" name="fecha_egreso" id="fecha_egreso">
            </div>
            <input type="text" class="d-none" name="idViaje" id="idViaje" value="{$id}">
            <button type="submit" class="btn btn-primary">Agregar reserva</button> 
        </form>
    </slide>
{include 'templates/footer.tpl'}