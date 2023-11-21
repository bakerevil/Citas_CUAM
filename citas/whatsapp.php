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
        <h2 class="w-100 text-center mb-1">Confirmar cita por Whatsapp</h2>
        <hr style="color: #8500" />
        <form id="formulario" method="POST">
            <div class="mb-3">
                <label for="txt_whatsapps" class="form-label">Ingrese su numero telefonico</label>
                <input type="text" class="form-control" id="txt_whatsapp" name="txt_whatsapp" placeholder="numero" required="">
            </div>
            <button type="submit" class="btn btn-primary w-100 text-uppercase fw-bold">Confirmar cita</button>
        </form>
    </div>
</body>
</html>