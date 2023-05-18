//declaramos la variable que nos indica en que pagina se encuentra actualmente
let paginaActual = 1;

//evento keyup, cuando se mande a llamar el evento se ejecutara la funcion getData
document.getElementById("campo").addEventListener("keyup", function () {
  getData(1);
});
//declaramos un evento que nos permita seleccionar el numero de registros que mostrara la pagina de la tabla
document
  .getElementById("num_registros")
  .addEventListener("change", function () {
    getData(paginaActual);
  });

function getData(pagina) {
  let input = document.getElementById("campo").value;
  let num_registros = document.getElementById("num_registros").value;
  let content = document.getElementById("content");

  if (pagina != null) {
    paginaActual = pagina;
  }

  //la direccion del archivo que hace la consulta
  let url = "crud/consultaVales.php";
  //enviar parametros mediante un formdata
  let formaData = new FormData();
  //envio de parametros
  formaData.append("campo", input);
  formaData.append("registros", num_registros);
  formaData.append("pagina", paginaActual);

  //crear la peticion mediante fetch
  fetch(url, {
    method: "POST",
    body: formaData,
  })
    .then((response) => response.json())
    .then((data) => {
      content.innerHTML = data.data;
      document.getElementById("lbl-total").innerHTML =
        "Mostrando " + data.totalFiltro + " de " + data.totalRegistros;
      document.getElementById("nav-paginacion").innerHTML = data.paginacion;
    })
    .catch((err) => console.log("Este es el error" + err));
}

function descargarExcel() {
  let input = document.getElementById("campo").value;
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  let columnas = []; // Variable para almacenar los valores seleccionados
  let selectedValues = [];
  var checkedCheckboxes = document.querySelectorAll('input[type="checkbox"]:checked');
  for (var j = 0; j < checkedCheckboxes.length; j++) {
    selectedValues.push(checkedCheckboxes[j].value);
  }
    columnas = selectedValues; // Actualiza la variable columnas con los valores seleccionados
  let url = "descarga/excelEtiqueta.php?filtro=" + encodeURIComponent(input);
  document.getElementById("btn-excelEtiqueta").href = url;
}
document.getElementById("btn-excelEtiqueta").addEventListener("click", descargarExcel);