function showLoadingOverlay() {
    const overlay = document.getElementById('loadingOverlay');
    overlay.classList.remove('d-none');
}

function hideLoadingOverlay() {
    const overlay = document.getElementById('loadingOverlay');
    overlay.classList.add('d-none');
}

document.getElementById('burgerMenu').addEventListener('click', function () {
    const navbar = document.getElementById('navbar');
    const logo = document.getElementById('logo');
    const closeButton = document.getElementById('closeButton');

    // Toggle la classe active pour le menu
    navbar.classList.toggle('active');

    // Cacher ou afficher le logo
    if (navbar.classList.contains('active')) {
        logo.classList.add('hidden');
        closeButton.style.display = 'block'; // Affiche le bouton "Fermer"
    } else {
        logo.classList.remove('hidden');
        closeButton.style.display = 'none'; // Cache le bouton "Fermer"
    }
});

// Gère le clic sur le bouton "Fermer"
document.getElementById('closeButton').addEventListener('click', function () {
    const navbar = document.getElementById('navbar');
    const logo = document.getElementById('logo');
    const closeButton = document.getElementById('closeButton');

    // Retire la classe active pour fermer le menu
    navbar.classList.remove('active');

    // Afficher le logo et cacher le bouton "Fermer"
    logo.classList.remove('hidden');
    closeButton.style.display = 'none';
});