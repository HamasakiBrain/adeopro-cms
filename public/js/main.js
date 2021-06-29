$(document).ready(function (){
    $(".slider").slick({
        arrows: !1,
        autoplay: 1,
        autoplaySpeed: 1500,
    });
    $('.partner_slider').slick({
        arrows: !1,
        autoplay: 1,
        autoplaySpeed: 1500,
        slidesToShow: 3,
        slidesToScroll: 2,
    })
    $('#mytable tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" style="max-width: 50px" placeholder="'+title+'" />' );
    } );

    // DataTable
    var table = $('#mytable').DataTable({
        responsive: 1,
        language: {
            url: "//cdn.datatables.net/plug-ins/1.10.25/i18n/Russian.json"
        },
        initComplete: function () {
            // Apply the search
            this.api().columns().every( function () {
                var that = this;

                $( 'input', this.footer() ).on( 'keyup change clear', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
        }
    });
})
