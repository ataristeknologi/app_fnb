function awal(){
  $(".formInput").hide();
  $(".tabelData").show();
}

function tambah(){
  $(".formInput").removeAttr("hidden");
  $(".formInput").show();
  $(".tabelData").hide();
}

$(document).ready(function(){
  awal();
})
