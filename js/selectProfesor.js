// console.log("Funcionando 🙋");

let departamento = document.querySelector(".nombreDepartamento");

function cargarDepartamentos() {
  $.ajax({
    type: "GET", //Indicamos el metodo por el cual enviaremos los datos (GET O POST)
    url: "../Controlador/listarDepartamento.php", // De donde vamos a recibir nuestros datos
    success: function (response) {
      //console.log(response)
      const departamentos = JSON.parse(response); //Transformamos nuestra respuesta que se encuentra en texto plano a formato JSON

      let template =
        '<option value="0" selected> Seleccionar Departamento</option>';

      departamentos.forEach((departamento) => {
        template += `<option value="${departamento.nDepartamento}">${departamento.nDepartamento}</option>`;
      });

      departamento.innerHTML = template; //Agregamos nuestro nuevo SELECT
    },
  });
}

//Llamamos a nuestra función para que se ejecute
cargarDepartamentos();

