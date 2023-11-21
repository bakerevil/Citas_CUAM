<!DOCTYPE html>
<html lang="es-CO">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Citas Cuam</title>

</head>

<body class="bg-dark d-flex justify-content-center align-items-center" style="height: 100vh">
    <div class="container bg-white rounded shadow p-4 col-xl-4 col-lg-6">
        <h2 class="w-100 text-center mb-4">Citas Cuam</h2>
        <hr style="color: #9999" />
        <form id="formulario" method="POST">
            <div class="mb-3">
                <label for="txt_nombrePPS" class="form-label">Nombre del Padre</label>
                <input type="text" class="form-control" id="txt_nombrePPS" name="txt_nombrePPS" placeholder="ingrese su nombre" required="">
            </div>
            <div class="mb-3">
                <label for="txt_nombreALM" class="form-label">Nombre del alumno</label>
                <input type="text" class="form-control" id="txt_nombreALM" name="txt_nombreALM" placeholder="ej. García Martinez Leonardo" required="">
            </div>
            <div class="mb-3">
                <label for="txt_grado" class="form-label">grado</label>
                <select type="text" class="form-control" id="txt_grado" name="txt_grado" placeholder="Ingrese el grado estudiantil" required="">
                    <option value="#">seleccione su opcion</option>
                    <option value="">401</option>
                    <option value="">402</option>
                    <option value="">403</option>
                    <option value="">404</option>
                    <option value="">501</option>
                    <option value="">502</option>
                    <option value="">503</option>
                    <option value="">601</option>
                    <option value="">602</option>
                    <option value="">603</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="txt_caso" class="form-label">caso</label>
                <select type="text" class="form-control" id="txt_caso" name="txt_caso" placeholder="caso" required="">
                    <option value="#">seleccione su opcion</option>
                    <option value="1">academico</option>
                    <option value="2">conductual</option>
                    <option value="3">psicologico</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="txt_modalidad" class="form-label">modalidad</label>
                <select type="text" class="form-control" id="txt_modalidad" name="txt_modalidad" placeholder="modalidad" required="">
                    <option value="#">seleccione su opcion</option>
                    <option value="1">videollamada</option>
                    <option value="2">presencial</option>
                    <option value="3">telefonica</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="txt_hora" class="form-label">horarios</label>
                <select type="time" class="form-control" id="txt_hora" name="txt_hora" placeholder="hora" required="">
                    <option value="#">seleccione su opcion</option>
                    <option value="7:30">7:30</option>
                    <option value="8:00">8:00</option>
                    <option value="8:30">8:30</option>
                    <option value="10:00">10:00</option>
                    <option value="10:30">10:30</option>
                    <option value="11:00">11:00</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="txt_dia" class="form-label">dia</label>
                <input type="date" class="form-control" id="txt_dia" name="txt_dia" placeholder="dia" required="">
            </div>
            <div class="mb-3">
                <label for="txt_asunto" class="form-label">detalles</label>
                <input type="text" class="form-control" id="txt_asunto" name="txt_asunto" placeholder="explique su situacion" required="">
            </div>
            <button type="submit" class="btn btn-primary w-100 text-uppercase fw-bold">Insertar</button>
            <div>
              <a href="correo.php">confirmar cita por correo</a>
              <a href="whatsapp.php">confirmar cita por whatsapp</a>
            </div>
        </form>
    </div>
    <script src="app.js"></script>

</body>
</html>