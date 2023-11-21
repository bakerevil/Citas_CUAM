<!DOCTYPE html>
<html lang="es-CO">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas Cuam</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script> type= "text/javascript" src="main.js"</script>
</head>

<body class="bg-dark d-flex justify-content-center align-items-center" style="height: 100vh">

    <div class="container bg-white rounded shadow p-4 col-xl-4 col-lg-6">

        <h2 class="w-100 text-center mb-1">Confirmar cita por correo</h2>

        <hr style="color: #9999" />
        

        

            <div class="mb-3">
                <label for="txt_correo" class="form-label">Ingrese correo electronico</label>
                <input type="text" class="form-control" id="txt_correo" name="txt_correo" placeholder="correo" required="">
            </div>
            
            
            
           

            <input type="button" value="Enviar correo" onClick= "window.alert('se envio correo de confirmacion'); ">
            

        </form>

    </div>

   

</body>
</html>