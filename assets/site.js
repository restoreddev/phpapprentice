// Dark mode
var bodyTag = document.querySelector('body');
var darkMode = document.getElementById('dark_mode');
if (localStorage.getItem('dark_mode') === 'true') {
    darkMode.checked = true;
} else {
    darkMode.checked = false;
}

darkMode.addEventListener('change', function (e) {
    if (this.checked) {
        localStorage.setItem('dark_mode', true);
        bodyTag.className = 'dark-mode';
    } else {
        localStorage.setItem('dark_mode', false);
        bodyTag.className = 'light-mode';
    }
});

// Arrow key bindings
document.onkeydown = function (e) {
    e = e || window.event;

    switch (e.key) {
        case 'Esc':
        case 'Escape':
            var modal = document.querySelector('.modal');
            if (modal && !modal.classList.contains('closed')) {
                modal.classList.add('closed');
            }
            break;
        case 'ArrowRight':
            var link = document.querySelector('#next-link');
            if (link) {
                window.location.href = link.href;
            }
            break;
        case 'ArrowLeft':
            var link = document.querySelector('#prev-link');
            if (link) {
                window.location.href = link.href;
            }
            break;
    }
};

// Table of contents
var menuButton = document.querySelector('.menu-button');
if (!menuButton) {
    throw new Error('No menu button');
}

var modalButton = document.querySelector('.modal-button');
var modal = document.querySelector('.modal');
var modalContent = document.querySelector('.modal-content');

var clickEvent = function (e) {
    var modal = document.querySelector('.modal');

    if (modal.classList.contains('closed')) {
        modal.classList.remove('closed')
    } else {
        modal.classList.add('closed')
    }
};
menuButton.addEventListener('click', clickEvent);
modalButton.addEventListener('click', clickEvent);

modal.addEventListener('click', function (e) {
    var target = e.target
    do {
        if (target == modalContent) {
            return;
        }
        target = target.parentNode;
    } while (target);

    modal.classList.add('closed')
});


