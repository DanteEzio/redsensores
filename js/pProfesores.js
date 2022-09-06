console.log("funcionando 😍");

// let data;

async function consultaProfesores() {
  let response = await fetch("../Controlador/mostrarProfesores.php");
  if (response.ok) {
    var datos = await response.text();
    var data = JSON.parse(datos);
    return data;
  }
}

let tabla = document.querySelector(".tabla");

function mostrarDatos(data) {
  template = "";

  console.log(typeof data);

  data.forEach((prof) => {
    template += `
      <tr>
          <th scope="row">${prof.idProfesor}</th>
          <td>${prof.nombreProfesor}</td>
          <td>${prof.departamento.idDepartamento}</td>
          <td>${prof.departamento.nombreDepartamento}</td>
      </tr>
      `;
  });

  console.log(data);

  tabla.innerHTML = template;
}

function recuperaProfesor() {
  consultaProfesores()
    .then((data) => mostrarDatos(data))
    .catch(function (err) {
      console.log(err);
    });
}

recuperaProfesor();

// let buscar = document.querySelector(".enviar");

// buscar.addEventListener("click", () => {
//   recuperaProfesor();
// });
