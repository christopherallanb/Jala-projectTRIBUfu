document.querySelectorAll('.sidebar a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelectorAll('.dashboard').forEach(dashboard => {
            dashboard.style.display = 'none';
        });
        document.querySelector(this.getAttribute('href')).style.display = 'block';
    });
});
