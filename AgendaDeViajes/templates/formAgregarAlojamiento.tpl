{include 'templates/header.tpl'}
    <slide>
        <h2>Cargar un alojamiento</h1>
        <h5>Por favor, complete los siguientes campos para reservar un hotel</h5> 
        <form  class="form-group" method= "POST"  action="addAlojamiento" >
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
{include 'templates/footer.tpl'}