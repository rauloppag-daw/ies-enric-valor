async function filtrar() {
    // Objeto que almacena los datos del usuario que se va a añadir
    //esto es solo un ejemplo

    let horas = document.getElementById('horas').value;

    let respuesta = await fetch(rutaFiltrar,
    {
    // Método ‘POST’
        method: "POST",
        // Cabeceras
        headers: {
            // Los datos se van a enviar en formato JSON
            'Content-Type': 'application/json;charset=utf-8',
            'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
        },
        // Datos convertidos a formato JSON
        body: JSON.stringify([horas])
    });
    // Primera promesa resuelta
    // ‘respuesta’ es un objeto de tipo ‘Response’
    if (respuesta.ok) {
        console.log("Petición POST realizada con éxito.");
        // Si el código de la petición es un código de éxito,
        // devolvemos una segunda promesa con la transformación de los datos a JSON
        //let datos = await respuesta.json();
        let datos = await respuesta.text();

        // Segunda promesa resuelta
        // ...
        // Tratamiento de los datos
        // ...
        //console.log(datos);
        document.getElementById('listado-profesores').innerHTML = datos;
    } else {
        console.log("Error de red");
    }
}
