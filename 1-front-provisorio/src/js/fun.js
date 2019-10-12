function openNavMobile() {
    document.getElementById("menu-mySidenav").style.width = "250px";
    $('.menu-sidenav').addClass("menu-sidenav-open");
    $('#menu-mySidenav-backdrop').addClass("menu-backdrop");
}

function closeNavMobile() {
    $("#menu-mySidenav-backdrop,.menu-sidenav a,.menu-sidenav .closebtn").on("click", function () {
      document.getElementById("menu-mySidenav").style.width = "0";
      $('.menu-sidenav').removeClass("menu-sidenav-open");
      $('#menu-mySidenav-backdrop').removeClass("menu-backdrop");
    });
  }

function abrirForm(){
  document.getElementById("teste").style.height = "100%";
}

function fecharForm(){
  document.getElementById("teste").style.height = "0";
}