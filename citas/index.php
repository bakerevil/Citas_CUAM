<!DOCTYPE html>
<html lang="es-CO">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas Cuam</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="bg-dark d-flex justify-content-center align-items-center" style="height: 100vh">

    <div class="container bg-white rounded shadow p-4 col-xl-4 col-lg-6">

        <h2 class="w-100 text-center mb-4">Citas Cuam</h2>

        <hr style="color: #9999" />

        <form id="formulario" method="POST">

            <div class="mb-3">
                <label for="txt_nombrePPS" class="form-label">nombrePPS</label>
                <input type="text" class="form-control" id="txt_nombrePPS" name="txt_nombrePPS" placeholder="ingrese su nombre" required="">
            </div>
            <div class="mb-3">
                <label for="txt_nombreALM" class="form-label">nombreALM</label>
                <input type="text" class="form-control" id="txt_nombreALM" name="txt_nombreALM" placeholder="Ingrese nombre del alumnmo" required="">
            </div>
            <div class="mb-3">
                <label for="txt_grado" class="form-label">grado</label>
                <input type="text" class="form-control" id="txt_grado" name="txt_grado" placeholder="Ingrese el grado estudiantil" required="">
            </div>
            <div class="mb-3">
                <label for="txt_caso" class="form-label">caso</label>
                <input type="text" class="form-control" id="txt_caso" name="txt_caso" placeholder="caso" required="">
            </div>

            <div class="mb-3">
                <label for="txt_modalidad" class="form-label">modalidad</label>
                <input type="text" class="form-control" id="txt_modalidad" name="txt_modalidad" placeholder="modalidad" required="">
            </div>
            <div class="mb-3">
                <label for="txt_hora" class="form-label">hora</label>
                <input type="text" class="form-control" id="txt_hora" name="txt_hora" placeholder="hora" required="">
            </div>
            <div class="mb-3">
                <label for="txt_dia" class="form-label">dia</label>
                <input type="text" class="form-control" id="txt_dia" name="txt_dia" placeholder="dia" required="">
            </div>
            <div class="mb-3">
                <label for="txt_asunto" class="form-label">asunto</label>
                <input type="text" class="form-control" id="txt_asunto" name="txt_asunto" placeholder="Ingrese el asunto" required="">
            </div>

           

            <button type="submit" class="btn btn-primary w-100 text-uppercase fw-bold">Insertar</button>

        </form>

    </div>

    <script src="app.js"></script>

</body>
</html>