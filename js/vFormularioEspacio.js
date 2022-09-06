console.log("funcionando 😍");

function agregarDatos() {
  // *** FETCH ***
  fetch("../Controlador/insertaEspacioDAO.php", {
    method: "POST",
    body: new FormData(formData2),
  })
    .then((response) => response.text())
    .then((response) => {
      console.log(response);
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
        formData2.reset();
      }
    });
}

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
    document.querySelector("#profesores").value,
    document.querySelector("#nombreEspacio").value,
    document.querySelector("#descripcion").value
  );
  if (esp.nombreEdificio <= 0 || esp.nombreEdificio > 4) {
    Swal.fire({
      position: "center",
      icon: "warning",
      title: "No has seleccionado un Edificio",
      showConfirmButton: false,
      background: "#f399249a",
      color: "#eee",
      timer: 3000,
    });
    return;
  }
  if (esp.nombreEspacio.length == 0) {
    Swal.fire({
      position: "center",
      icon: "warning",
      title: "No has ingresado el nombre del espacio",
      showConfirmButton: false,
      background: "#f399249a",
      color: "#eee",
      timer: 3000,
    });
    return;
  }
  if (esp.numero.length == 0) {
    Swal.fire({
      position: "center",
      icon: "warning",
      title: "No has ingresado un numero de espacio",
      showConfirmButton: false,
      background: "#f399249a",
      color: "#eee",
      timer: 3000,
    });
    return;
  }
  if (esp.descripcion.length == 0) {
    Swal.fire({
      position: "center",
      icon: "warning",
      title: "No has ingresado la descripcion del espacio",
      showConfirmButton: false,
      background: "#f399249a",
      color: "#eee",
      timer: 3000,
    });
    return;
  }
  if (esp.profesor < 1) {
    Swal.fire({
      position: "center",
      icon: "warning",
      title:
        "No has seleccionado los profesores que se encuentran en ese espacio",
      showConfirmButton: false,
      background: "#f399249a",
      color: "#eee",
      timer: 3000,
    });
    return;
  }
  if (esp.profesorEncargado <= 0 || esp.profesorEncargado > 4) {
    Swal.fire({
      position: "center",
      icon: "warning",
      title: "No has seleccionado un Encargado",
      showConfirmButton: false,
      background: "#f399249a",
      color: "#eee",
      timer: 3000,
    });
    return;
  }

console.log(JSON.stringify(esp));
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

