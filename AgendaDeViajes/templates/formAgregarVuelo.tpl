{include 'templates/header.tpl'}
 <slide>
    <h2>Cargar un Vuelo</h1>
        <h5>Por favor, complete los siguientes campos para agregar un nuevo Vuelo</h5> 
        <form  class="form-group" method= "POST"  action="addVueloFormulario" >
            <div class="form-group">
              <label for="nro_vuelo">Numero de vuelo:</label>
                <input name="nro_vuelo" id="nro_vuelo" type="text">
            </div>
            <div class="form-group">
                <label for="compañia">Compañia:</label>
                <input type="text" id="compañia" name="compañia">
             </div>
             <div class="form-group">
                <label for="puerta">Puerta:</label>
                <input type="number" id="puerta" name="puerta">
            </div>
             <div class="form-group">
                <label for="asiento">Asiento:</label>
                <input type="number" id="asiento" name="asiento">
            </div>
             <div class="form-group">
                <label for="aeropuerto_origen">Aeropuesto origen:</label>
                <input type="text" id="aeropuerto_origen" name="aeropuerto_origen">
            </div>
            <div class="form-group">
                <label for="aeropuerto_destino">Aeropuerto destino:</label>
                <input type="text" id="aeropuerto_destino" name="aeropuerto_destino">
             </div>
               <div class="form-group">
                <label for="ciudad_origen">Ciudad origen:</label>
                <input type="text" id="ciudad_origen" name="ciudad_origen">
            </div>
             <div class="form-group">
                <label for="ciudad_destino">Ciudad destino:</label>
                <input type="text" id="ciudad_destino" name="ciudad_destino">
            </div>
           <div class="form-group">
                <label for="pais_origen">Pais origen:</label>
                <input type="text" id="pais_origen" name="pais_origen">
            </div>
             <div class="form-group">
                <label for="pais_destino">Pais destino:</label>
                <input type="text" id="pais_destino" name="pais_destino">
            </div>
             <div class="form-group">
                <label for="fecha_salida">Fecha salida:</label>
                <input type="date" id="fecha_salida" name="fecha_salida">
            </div>
            <div class="form-group">
                <label for="hora_salida">Hora salida:</label>
                <input type="time" id="hora_salida" name="hora_salida">
            </div>
            <div class="form-group">
                <label for="fecha_llegada">Fecha llegada:</label>
                <input type="date" id="fecha_llegada" name="fecha_llegada">
            </div>
            <div class="form-group">
                <label for="hora_llegada">Hora llegada:</label>
                <input type="time" id="hora_llegada" name="hora_llegada">
            </div>
             <div class="form-group">
                <label for="reserva">Reserva:</label>
                <input type="text" id="reserva" name="reserva">
            </div>
             <div class="form-group">
                <label for="tiempo_escalas">Tiempo entre escalas:</label>
                <input type="text" id="tiempo_escalas" name="tiempo_escalas">
            </div>
             <div class="form-group">
                <label for="Agent_Id">Agent ID:</label>
                <input type="number" id="Agent_Id" name="Agent_Id">
            </div>
             <div class="form-group">
                <label for="cant_pasajeros">Cantidad de Pasajeros:</label>
                <input type="number" id="cant_pasajeros" name="cant_pasajeros">
            </div>
            <div class="form-group">
                <label for="cant_valijas">Cantidad de valijas:</label>
                <input type="number" id="cant_valijas" name="cant_valijas">
            </div>
             <div class="form-group">
                <label for="peso_maximo">Peso maximo:</label>
                <input type="number" id="peso_maximo" name="peso_maximo">
            </div>

            <!--<input type="text" class="d-none" name="idViaje" id="idViaje" value="{$id}">-->
            <button type="submit" class="btn btn-primary">Agregar vuelo</button> 
        </form>
    </slide>
{include 'templates/footer.tpl'}