let thumbnails = document.getElementsByClassName('thumbnail');
let slider = document.getElementById('slider');

const maxScrollLeft = slider.scrollWidth - slider.clientWidth;

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

//AUTO PLAY THE SLIDER 
function autoPlay() {
    if (slider.scrollLeft > (maxScrollLeft - 1)) {
        slider.scrollLeft -= maxScrollLeft;
    } else {
        slider.scrollLeft += 1;
    }
}
let play = setInterval(autoPlay, 5);

// PAUSE THE SLIDE ON HOVER
for (var i = 0; i < thumbnails.length; i++) {

    thumbnails[i].addEventListener('mouseover', function () {
        clearInterval(play);
    });

    thumbnails[i].addEventListener('mouseout', function () {
        return play = setInterval(autoPlay, 5);
    });
}