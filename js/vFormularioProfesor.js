console.log("funcionando 😍");

// *** Metodo Largo ***
function Profesor(nProfesor, nDepartamento) {
  this.nProfesor = nProfesor;
  this.nDepartamento = nDepartamento;
}

function validarFormulario() {
  let prof = new Profesor(
    document.querySelector("#nombreProfesor").value,
    document.querySelector("#nombreDepartamento").value
  );
  if (prof.nProfesor.length == 0) {
    alert("No has escrito un nombre");
    return;
  }
  if (prof.nDepartamento <= 0 || prof.nDepartamento > 5) {
    alert("No has seleccionado un Departamento");
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
    let datos = $("#formData").serialize(); // A través del método serialize() estamos transformando la información que viene del formulario a una cadena de texto lo cual nos sirve para construir un dataString que puede recibir un archivo PHP cuando se ejecuta una llamada AJAX
    console.log(datos);
    $.ajax({
      type: "POST",
      url: "../testProfesorDAO.php",
      data: datos,
      success: function (response) {
        if (response == 1) {
          alert("Agregado con éxito");
        } else {
          alert("Fallo el server");
        }
      }
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
