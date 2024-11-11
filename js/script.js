document.addEventListener('DOMContentLoaded', () => {
    const switchElement = document.getElementById('mode-switch');
    const bodyElement = document.body;

    // Cargar el modo inicial desde localStorage
    if (localStorage.getItem('mode') === 'dark') {
        bodyElement.classList.add('dark-mode');
        switchElement.checked = true;
    } else {
        bodyElement.classList.add('light-mode');
    }

    switchElement.addEventListener('change', function() {
        if (this.checked) {
            bodyElement.classList.remove('light-mode');
            bodyElement.classList.add('dark-mode');
            localStorage.setItem('mode', 'dark');
        } else {
            bodyElement.classList.remove('dark-mode');
            bodyElement.classList.add('light-mode');
            localStorage.setItem('mode', 'light');
        }
    });
});
