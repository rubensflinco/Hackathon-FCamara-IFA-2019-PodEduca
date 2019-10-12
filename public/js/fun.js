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
  document.getElementById("form").style.height = "100%";
  document.getElementById("form").style.bottom = "0";
}

function fecharForm(){
  document.getElementById("form").style.height = "0";
  document.getElementById("form").style.bottom = "-1000px";
}

function AtivarCarouselMulti() {
  if (!$('.carousel[data-type="multi"] .item.AtivarCarouselMulti').text()) {
      $('.carousel[data-type="multi"] .item').each(function () {
          $(this).addClass('AtivarCarouselMulti');
          var next = $(this).next();
          if (!next.length) {
              next = $(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));

          for (var i = 0; i < 2; i++) {
              next = next.next();
              if (!next.length) {
                  next = $(this).siblings(':first');
              }

              next.children(':first-child').clone().appendTo($(this));
          }
      });
      $(document).ready(function () {
          $(".carousel").swipe({
              swipe: function (event, direction, distance, duration, fingerCount, fingerData) {
                  if (direction === 'left') $(this).carousel('next');
                  if (direction === 'right') $(this).carousel('prev');
              },
              allowPageScroll: "vertical"
          });
      });
  }
}