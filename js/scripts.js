$(document).ready(function () {
    $(".burger").sidr({
        name: "respNav",
        source: ".main-nav",
        displace: false,
    })

    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        navtext: ['Précédent', 'Suivant'],
        dots: false,
        autoplay: true,
        autoplaySpeed: 700,
        autoplayHoverPause: true,
    });

    var $grid = $(".grid").isotope();

    $(".filters-button-group button").click(function () {
        const filterValue = $(this).data("filter");
        console.log({filterValue});
        $grid.isotope({filter: filterValue});
    });


});

