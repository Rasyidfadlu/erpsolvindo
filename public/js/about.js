$(window).on('load', function() {
    $('.pKiri').addClass('pMuncul');
    $('.pKanan').addClass('pMuncul');
});



$(window).scroll(function() {
    var wScroll = $(this).scrollTop();

    $('.jumbotron h1').css({
        'transform': 'translate(0px, ' + wScroll / 1 + '%)'
    });

    if (wScroll > 400) {
        $('.contact .Kiri').each(function() {
            setTimeout(function() {
                $('.contact .bgKiri').addClass('bgMuncul')
            });
        });

        $('.contact .formKanan').each(function() {
            setTimeout(function() {
                $('.contact .formKanan').addClass('formMuncul')
            });
        });
    }
});


$("#chooseFile").change(function() {
    readURL(this);
});

const flashData = $('.flash-data').data('flashdata');
if (flashData) {
    Swal.fire(
        'Success',
        flashData,
        'success'
    ).then(function() {
        location.reload();
    });
    $(".swal2-modal").css('background-color', '#252733');
    $(".swal2-success-circular-line-left").css('background-color', '#252733');
    $(".swal2-success-circular-line-right").css('background-color', '#252733');
    $(".swal2-success-fix").css('background-color', '#252733');
    $(".swal2-title").css('color', '#fff');
    $(".swal2-content").css('color', '#fff');
}