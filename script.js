// 🌟 Minuteur de lancement
function startCountdown(targetDate) {
    const countdownElement = document.getElementById('countdown-timer');

    function updateCountdown() {
        const now = new Date().getTime();
        const distance = targetDate - now;

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById('days').textContent = days.toString().padStart(2, '0');
        document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
        document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
        document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');

        if (distance < 0) {
            clearInterval(countdownInterval);
            countdownElement.innerHTML = "<h2>Lancement terminé !</h2>";
        }
    }

    const countdownInterval = setInterval(updateCountdown, 1000);
}

const launchDate = new Date('2025-03-01T00:00:00').getTime();
startCountdown(launchDate);

// Mobile menu toggle
document.getElementById('menu-toggle').addEventListener('click', function() {
    document.getElementById('nav-menu').classList.toggle('visible');
});

// Close menu when clicking outside
document.addEventListener('click', function(event) {
    const nav = document.querySelector('nav');
    const menu = document.getElementById('nav-menu');
    if (!nav.contains(event.target) && menu.classList.contains('visible')) {
        menu.classList.remove('visible');
    }
});
