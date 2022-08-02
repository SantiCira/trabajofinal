<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de compra</title>
</head>
<body>
    <div ></div>
    <div>
    <form method="POST">
                <p>Nombre:<input type="text" name="nombre" required></p>
                <p>Correo electronico:<input type="mail" name="correo" required></p>
                <p>Telefono: <input type="tel" name="telefono" placeholder="Ej: +54 292312345678"required></p>
                <div>
                <p>Selecciona tu provincia: <select name="provincia" id="provincia">
                    <option value>Seleccione una provincia</option>
                    <option value="B" id="01">Buenos Aires</option>
                    <option value="C" id="02">Capital Federal</option>
                    <option value="D" id="03">Catamarca</option>
                    <option value="E" id="04">Chaco</option>
                    <option value="F" id="05">Chubut</option>
                    <option value="G" id="06">Córdoba</option>
                    <option value="H" id="07">Corrientes</option>
                    <option value="I" id="08">Entre Rios</option>
                    <option value="J" id="09">Formosa</option>
                    <option value="K" id="10">Jujuy</option>
                    <option value="M" id="11">La Pampa</option>
                    <option value="N" id="12">La Rioja</option>
                    <option value="L" id="13">Mendoza</option>
                    <option value="O" id="14">Misiones</option>
                    <option value="P" id="15">Neuquén</option>
                    <option value="Q" id="16">Río Negro</option>
                    <option value="R" id="17">Salta</option>
                    <option value="S" id="18">San Juan</option>
                    <option value="T" id="19">San Luis</option>
                    <option value="U" id="20">Santa Cruz</option>
                    <option value="V" id="21">Santa Fe</option>
                    <option value="X" id="22">Santiago Del Estero</option>
                    <option value="Y" id="23">Tierra Del Fuego</option>
                    <option value="Z" id="24">Tucumán</option>
                </select></p>   
                </div>
                <p>Calle: <input type="text" name="calle" maxlength="30" placeholder="Nombre de la calle" required></p>
                <p>Numero:  <input type="num" name="numero" maxlength="5" placeholder="Altura de la Calle" required></p>
                <p>Piso: <input type="text" name="piso" maxlength="6" placeholder="Piso"></p>
                <p>Depto: <input type="text" name="piso" maxlength="4" placeholder="Depto"></p>
                <p>CP: <input type="text" name="CP" maxlength="4" placeholder="Codigo Postal"></p>
                <p>Localidad: <input type="text" name="localidad" maxlength="30" placeholder="Municipio"></p>
           
           
           
            </form>
    </div>
</body>
</html>