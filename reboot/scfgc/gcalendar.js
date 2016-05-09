function setAgenda(src) {
    var splitSrc = src.split('&');
    var index = splitSrc.indexOf('mode=AGENDA');

    if(index > -1) {
        splitSrc.splice(index, 1);
    }

    splitSrc.push('mode=AGENDA');
    src = splitSrc.join('&');
    return src;
}

function setCalendar(src) {
    var splitSrc = src.split('&');
    var index = splitSrc.indexOf('mode=AGENDA');

    if(index > -1) {
        splitSrc.splice(index, 1);
    }

    src = splitSrc.join('&');
    return src;
}

function resizeGCalendar() {
    var gcalendar = document.getElementById('gcalendar');
    var src = gcalendar.getAttribute('src');

    if(window.innerWidth >= 1200) {
        src = setCalendar(src);
        gcalendar.setAttribute('width', '1140');
        gcalendar.setAttribute('src', src);
    } else if(window.innerWidth >= 992) {
        src = setCalendar(src);
        gcalendar.setAttribute('width', '940');
        gcalendar.setAttribute('src', src);
    } else if(window.innerWidth >= 768) {
        src = setCalendar(src);
        gcalendar.setAttribute('width', '720');
        gcalendar.setAttribute('src', src);
    } else {
        src = setAgenda(src);
        gcalendar.setAttribute('width', '450');
        gcalendar.setAttribute('src', src);
    }
}

window.addEventListener('resize', function() {
    resizeGCalendar();
});

resizeGCalendar();
