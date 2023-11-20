

$(".carousel").owlCarousel({
    itemm: 4,
    margin: 15,
    loop: true,
    dots: false,
    nav: false,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
        0: { items: 1, nav: false },
        600: { items: 2, nav: false },
        1000: { items: 3, nav: false },
        1000: { items: 4, nav: false },
    },
  });

  $('.customNextBtn').click(function() {
        $(".carousel").trigger('next.owl.carousel');
    })

    $('.customPrevBtn').click(function() {
         $(".carousel").trigger('prev.owl.carousel', [300]);
    })
  

    function ajouterBordure(element) {
        const cartes = document.querySelectorAll('.card');
        cartes.forEach(carte => carte.classList.remove('active'));
        element.classList.add('active');

        var selectButton = element.querySelector('#selectButton');
        selectButton.style.display = 'inline-block'; 
      }

      function supprimerBordure(element) {

        var selectButton = element.querySelector('#selectButton');
        selectButton.style.display = 'none'; 
      }



      
    


  
      