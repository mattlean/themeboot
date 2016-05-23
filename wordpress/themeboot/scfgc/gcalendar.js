function setAgenda(gcalendar) {
    var newSrc = gcalendar.getAttribute('src');

    var splitSrc = newSrc.split('&');
    var index = splitSrc.indexOf('mode=AGENDA');

    if(index > -1) {
        splitSrc.splice(index, 1);
    }

    splitSrc.push('mode=AGENDA');
    newSrc = splitSrc.join('&');

    if(newSrc !== gcalendar.getAttribute('src')) {
        gcalendar.setAttribute('src', newSrc);
    }
}

function setCalendar(gcalendar) {
    var newSrc = gcalendar.getAttribute('src');

    var splitSrc = newSrc.split('&');
    var index = splitSrc.indexOf('mode=AGENDA');

    if(index > -1) {
        splitSrc.splice(index, 1);
    }

    newSrc = splitSrc.join('&');

    if(newSrc !== gcalendar.getAttribute('src')) {
        gcalendar.setAttribute('src', newSrc);
    }
}

function resizeGCalendar() {
    var gcalendar = document.getElementById('gcalendar');

    if(window.innerWidth >= 1200) {
        src = setCalendar(gcalendar);
        gcalendar.setAttribute('width', '1140');
    } else if(window.innerWidth >= 992) {
        src = setCalendar(gcalendar);
        gcalendar.setAttribute('width', '940');
    } else if(window.innerWidth >= 768) {
        src = setCalendar(gcalendar);
        gcalendar.setAttribute('width', '720');
    } else {
        src = setAgenda(gcalendar);
        gcalendar.setAttribute('width', '300');
    }
}

window.addEventListener('resize', function() {
    resizeGCalendar();
});

resizeGCalendar();
