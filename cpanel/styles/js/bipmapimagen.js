$(function() {
  $("#filepicker").filepicker({
    style: {
      ui:
        '<div class="panel-group" id="<%= element.getAttribute("id") + "_panel_group" %>">' +
        '<div class="panel panel-default">' +
        '<div class="panel-heading">' +
        '<h4 class="panel-title">' +
        "<a " +
        'data-toggle="collapse" ' +
        'data-parent="#<%= element.getAttribute("id") + "_panel_group" %>" ' +
        'href="#<%= element.getAttribute("id") + "_panel_collapse" %>">' +
        "" +
        "</a>" +
        "</h4>" +
        "</div>" +
        '<div id="<%= element.getAttribute("id") + "_panel_collapse" %>" class="panel-collapse collapse">' +
        '<div class="panel-body">' +
        '<%= preview %><%= _build(input, {className: "form-control", placeholder: element.placeholder}) %>' +
        "</div>" +
        "</div>" +
        "</div>" +
        "</div>",
      thumbnail: {
        wrap: '<div id="logo" class="thumbnail"></div>'
      }
    }
  });
});
