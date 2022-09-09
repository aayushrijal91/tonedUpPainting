// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"], a[href="#testimonials"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

let date = new Date();
let hr = date.getHours();
let mins = date.getMinutes();
let meridian;
let currentTime;

meridian = (hr > 11) ? "PM" : "AM";
hr = (hr > 12) ? (hr - 12) : hr;
mins = (mins < 10) ? ("0" + mins) : mins;
currentTime = hr + ":" + mins + " " + meridian;

$(".current-time").html(currentTime);

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