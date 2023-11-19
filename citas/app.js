document.getElementById('formulario').addEventListener('submit', function(e) {
    
    e.preventDefault();

    let formulario = new FormData(document.getElementById('formulario'));

    fetch('registrar.php', {
        method: 'POST',
        body: formulario
    })
    .then(res => res.json())
    .then(data => {
        if(data == 'true') {
            document.getElementById('txt_nombrePPS').value = '';
            document.getElementById('txt_nombreALM').value = '';
            document.getElementById('txt_grado').value = '';
            document.getElementById('txt_caso').value = '';
            document.getElementById('txt_modalidad').value = '';
            document.getElementById('txt_hora').value = '';
            document.getElementById('txt_dia').value = '';
            document.getElementById('txt_asunto').value = '';

            alert('Se agendo su cita.');
        } else {
            console.log(data);
        }
    });

});