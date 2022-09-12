// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"], a[href="#testimonials"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

let now = new Date();
let time = now.toLocaleTimeString("en-US", {hour: '2-digit', minute: '2-digit', timeZone: "Australia/Melbourne"});

$(".current-time").html(time);

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});

$(".see-review-btn").on('click', function() {
    $('.testimonial-card').removeClass('active');
    $(this).parents('.testimonial-card').addClass('active');
});

function fileUploaded(uploadName, labelId) {
    var file = document.getElementById(uploadName);
    if (file.value != "") {
        var theSplit = file.value.split('\\');
        var fileName = theSplit[theSplit.length - 1];
        $(`#${labelId}`).html(fileName.substring(0, 50));
    }
}