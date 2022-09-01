let edificio = document.querySelector("#nombreEdificio");
let encargado = document.querySelector("#profesorEncargado");
let prof = document.querySelector("#profesores");

function cargarEdificios() {
  $.ajax({
    type: "GET", //Indicamos el metodo por el cual enviaremos los datos (GET O POST)
    url: "../Controlador/listarEdificios.php", // De donde vamos a recibir nuestros datos
    success: function (response) {
      //console.log(response)
      const edificios = JSON.parse(response); //Transformamos nuestra respuesta que se encuentra en texto plano a formato JSON

      let template =
        '<option value="0" selected> Seleccionar Edificio...</option>';

      edificios.forEach((edificio) => {
        template += `<option value="${edificio.idEdificio}">${edificio.nEdificio}</option>`;
      });

      edificio.innerHTML = template; //Agregamos nuestro nuevo SELECT
    },
  });
}

function cargarProfesorEncargado() {
  $.ajax({
    type: "GET", //Indicamos el metodo por el cual enviaremos los datos (GET O POST)
    url: "../Controlador/listarProfesores.php", // De donde vamos a recibir nuestros datos
    success: function (response) {
      //console.log(response)
      const profesores = JSON.parse(response); //Transformamos nuestra respuesta que se encuentra en texto plano a formato JSON

      let template =
        '<option value="0" selected> Seleccionar Profesor...</option>';

      profesores.forEach((encargado) => {
        template += `<option value="${encargado.idProfesor}">${encargado.nProfesor}</option>`;
      });

      encargado.innerHTML = template; //Agregamos nuestro nuevo SELECT
    },
  });
}

function cargarProfesores() {
  $.ajax({
    type: "GET", //Indicamos el metodo por el cual enviaremos los datos (GET O POST)
    url: "../Controlador/listarProfesores.php", // De donde vamos a recibir nuestros datos
    success: function (response) {
      //console.log(response)
      const profesores = JSON.parse(response); //Transformamos nuestra respuesta que se encuentra en texto plano a formato JSON

      let template = "";

      profesores.forEach((profesor) => {
        template += `<div class="form-check col-6">
                      <input class="form-check-input profesor" name="profesor" id="profesor" type="checkbox" value="${profesor.idProfesor}">
                        <label class="form-check-label" for="flexCheckDefault">
                          ${profesor.nProfesor}
                        </label>
                    </div>`;
      });

      prof.innerHTML = template; //Agregamos nuestro nuevo SELECT
    },
  });
}

cargarEdificios();
cargarProfesorEncargado();
cargarProfesores();
