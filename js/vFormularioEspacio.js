console.log("funcionando 😍");

// *** Metodo Largo ***
function Espacio(
  nombreEdificio,
  profesorEncargado,
  numero,
  profesor,
  nombreEspacio,
  descripcion
) {
  this.nombreEdificio = nombreEdificio;
  this.profesorEncargado = profesorEncargado;
  this.numero = numero;
  this.profesor = profesor;
  this.nombreEspacio = nombreEspacio;
  this.descripcion = descripcion;
}

function validarFormulario() {
  let esp = new Espacio(
    document.querySelector("#nombreEdificio").value,
    document.querySelector("#profesorEncargado").value,
    document.querySelector("#numero").value,
    document.querySelector("#profesor").value,
    document.querySelector("#nombreEspacio").value,
    document.querySelector("#descripcion").value
  );
  if (esp.nombreEdificio <= 0 || esp.nombreEdificio > 4) {
    alert("No has seleccionado un Edificio");
    return;
  }
  if (esp.profesorEncargado <= 0 || esp.profesorEncargado > 4) {
    alert("No has seleccionado un Encargado");
    return;
  }
  if (esp.profesor < 1 || esp.profesor > 4) {
    alert(
      "No has seleccionado los profesores que se encuentran en ese espacio"
    );
    return;
  }
  if (esp.nombreEspacio.length == 0) {
    alert("No has ingresado el nombre del espacio");
    return;
  }
  if (esp.descripcion.length == 0) {
    alert("No has ingresado la descripcion del espacio");
    return;
  }

  //console.log(JSON.stringify(prof));
  //document.getElementById("formData").submit();
}

let enviar = document.querySelector(".enviar");

enviar.addEventListener("click", (e) => {
  e.preventDefault();

  validarFormulario();
  //console.log("funcionando...");
  let datos = $("#formData2").serialize(); // A través del método serialize() estamos transformando la información que viene del formulario a una cadena de texto lo cual nos sirve para construir un dataString que puede recibir un archivo PHP cuando se ejecuta una llamada AJAX
    console.log(datos);
    //return false
  $.ajax({
    type: "POST",
    url: "../testEspacioDAO.php",
    data: datos,
    success: function (response) {
      if (response == 1) {
        alert("Agregado con éxito");
      } else {
        alert("Fallo el server");
      }
    },
  });
  return false; // Con esto estamos evitando que recargue la página
});

function recargarPagina() {
  if (window.history.replaceState) {
    // verificamos disponibilidad
    window.history.replaceState(null, null, window.location.href);
  }
}

recargarPagina();
