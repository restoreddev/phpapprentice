import Prism from 'prismjs';

var onLoad = function () {
    Prism.highlightAll();

    var menuButton = document.querySelector('.menu-button');

    // stop execution if menu button does not exist on page
    if (!menuButton) {
        return;
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
};

document.onkeydown = function (e) {
    e = e || window.event;

    var isEscape = false;
    if ("key" in e) {
        isEscape = (e.key == "Escape" || e.key == "Esc");
    } else {
        isEscape = (e.keyCode == 27);
    }

    if (isEscape) {
        var modal = document.querySelector('.modal');
        if (modal && !modal.classList.contains('closed')) {
            modal.classList.add('closed');
        }
    }
};

if (document.readyState !== 'loading') {
    onLoad();
} else {
    document.addEventListener('DOMContentLoaded', onLoad);
}
