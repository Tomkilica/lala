$(document).ready(function() {
  $("#employee").owlCarousel({
      loop:true,
      margin:16,
      touchDrag: true,
      responsive:{
          0:{
            items:1,
          },
          750:{
            items:3,
          },
          1300:{
            items:3,
          }
      },
      nav:true,
      navText: [
        '<img class="prev-img" src="./local/resources/assets/img/about/icn_arrowL.png" >',
        '<img class="next-img" src="./local/resources/assets/img/about/icn_arrow.png" >'
      ]
    });
});