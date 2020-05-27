{include 'templates/header.tpl'}
    <slide>
        <h2>Cargar un alojamiento</h1>
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
                <div></div>
                <input type="radio" id="1" name="1" value="1">
                <label for="1">1</label><br>
                <input type="radio" id="2" name="2" value="2">
                <label for="2">2</label><br>
                <input type="radio" id="3" name="3" value="3">
                <label for="3">3</label>
            </div>
            <div class="form-group">
                <label for="tipo_habitacion">Tipo de habitacion:</label>
                <select class="form-control" name="tipo_habitacion" id="tipo_habitacion">
                    <option value="Single">Single</option>
                    <option value="Doble">Doble</option>
                </select>
            </div>
            <div class="form-group">
                <label for="servicio">Servicio:</label>
                <div></div>

                <input type="checkbox" id="desayuno" name="desayuno" value="desayuno">
                <label for="desayuno">Desayuno</label><br>

                <input type="checkbox" id="limpieza" name="limpieza" value="limpieza">
                <label for="limpieza">Limpieza</label><br>

                <input type="checkbox" id="pileta" name="pileta" value="pileta">
                <label for="pileta">Pileta</label><br>
                
                <input type="checkbox" id="sauna" name="sauna" value="sauna">
                <label for="sauna">Sauna</label><br>

                <input type="checkbox" id="gimnasio" name="gimnasio" value="gimnasio">
                <label for="gimnasio">Gimnasio</label><br>

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