function resizeGAgenda() {
    var gagenda = document.getElementById('gagenda');

    if(window.innerWidth > 400) {
        gagenda.setAttribute('width', '360');
    } else {
        gagenda.setAttribute('width', '300');
    }
}

window.addEventListener('resize', function() {
    resizeGAgenda();
});

resizeGAgenda();
