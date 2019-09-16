// url para llamar la peticion por ajax
var url_listar_usuario = "php/listar.php";

function envioAjax() {
  // se genera el paginador
  paginador = $(".pagination");
  // cantidad de items por pagina
  var items = 4,
    numeros = 4;
  // inicia el paginador
  init_paginator(paginador, items, numeros);
  // se envia la peticion ajax que se realizara como callback
  set_callback(get_data_callback);
  cargaPagina(0);
}
// peticion ajax enviada como callback
function get_data_callback() {
  id = document.getElementsByClassName("resp-tab-active");
  //alert(id[0].value);
  var parametros = {
    limit: itemsPorPagina,
    offset: desde,
    tipo: id[0].value
  };
  $.ajax({
    data: parametros,
    type: "POST",
    url: url_listar_usuario
  })
    .done(function(data, textStatus, jqXHR) {
      // obtiene la clave lista del json data
      var lista = data.lista;
      $("#table" + id[0].value).html("");

      // si es necesario actualiza la cantidad de paginas del paginador
      if (pagina == 0) {
        creaPaginador(data.cantidad);
      }
      // genera el cuerpo de la tabla
      $.each(lista, function(ind, elem) {
        $(
          "<div class='ed-item'>" +
            "<div class='card'>" +
            "<nav>" +
            "<a ><i class='icon-home'></i>" +
            elem.nombre +
            "</a>" +
            "</nav>" +
            "<div class='ed-card'>" +
            "<div class='ed-contem-card1'>" +
            "<div>" +
            "<img src='" +
            elem.imagen +
            "'>" +
            "</div>" +
            "</div>" +
            "<div class='ed-contem-card2'>" +
            "<div class='des' >" +
            elem.descripcion +
            "</div>" +
            "<a ><i class='icon-room' ></i>" +
            elem.direccion +
            "</a>" +
            "<a ><i class='icon-phone_in_talk'></i>" +
            elem.telefono +
            "</a>" +
            "<a href='http://" +
            elem.pagina_web +
            "'target='_blank'><i class='icon-globe' ></i>" +
            elem.pagina_web +
            "</a>" +
            "</div>" +
            "</div>" +
            "</div>" +
            "</div> <br>"
        ).appendTo($("#table" + id[0].value));
      });
    })
    .fail(function(jqXHR, textStatus, textError) {
      alert("Error al realizar la peticion dame".textError);
    });
}
