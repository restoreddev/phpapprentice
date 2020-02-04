var bodyTag = document.querySelector('body');
if (localStorage.getItem('dark_mode') === 'true') {
    bodyTag.className = 'dark-mode';
}