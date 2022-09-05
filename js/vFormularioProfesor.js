console.log("funcionando 😍");

function agregarDatos() {
  // *** Método AJAX ***
  // let datos = $("#formData").serialize();
  // console.log(datos);

  // $.ajax({
  //   method: "POST",
  //   url: "../Controlador/insertaProfesorDAO.php",
  //   data: datos,
  //   success: function (response) {

  //     if (response.status == 200) {
  //       alert("Registro Exitoso")
  //     } else {
  //       alert("Error de Registro")
  //     }
  //   },
  // });

  // *** FETCH ***
  fetch("../Controlador/insertaProfesorDAO.php", {
    method: "POST",
    body: new FormData(formData),
  })
    .then((response) => response.text())
    .then((response) => {
      // console.log(response);
      if (response == "ok") {
        Swal.fire({
          position: "center",
          icon: "Success",
          title: "Registro Éxitoso",
          showConfirmButton: true,
          background: "#75b900ab",
          // backdrop: "#75b90030",
          color: "#eee",
          timer: 3000,
        });
        formData.reset();
      }
    });
}

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
    Swal.fire({
      position: "center",
      icon: "warning",
      title: "No has escrito un nombre",
      showConfirmButton: false,
      background: "#f399249a",
      color: "#eee",
      timer: 3000,
    });
    return;
  }
  // alert("No has escrito un nombre");

  if (prof.nDepartamento <= 0 || prof.nDepartamento > 5) {
     Swal.fire({
       position: "center",
       icon: "warning",
       title: "No has seleccionado un Departamento",
       showConfirmButton: false,
       background: "#f399249a",
       color: "#eee",
       timer: 3000,
     });
    return;
  }

  agregarDatos();
}

let enviar = document.querySelector(".enviar");

function insertaProfesor() {
  enviar.addEventListener("click", (e) => {
    e.preventDefault();

    validarFormulario();
  });
}

insertaProfesor();

// *** Ya no se necesita, ya que, ya no se recarga nuestra página ***
// function recargarPagina() {
//   if (window.history.replaceState) {
//     // verificamos disponibilidad
//     window.history.replaceState(null, null, window.location.href);
//   }
// }
// recargarPagina();
