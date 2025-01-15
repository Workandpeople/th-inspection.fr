document.getElementById('contactForm').addEventListener('submit', function (e) {
    e.preventDefault();

    // Récupère la div pour les messages
    const responseMessage = document.getElementById('responseMessage');

    // Affiche un overlay de chargement si nécessaire
    showLoadingOverlay();

    // Récupère les données du formulaire
    const formData = new FormData(this);

    fetch('/api/contact', {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Succès : affiche un message vert
                responseMessage.className = 'alert alert-success';
                responseMessage.textContent = 'Votre message a été envoyé avec succès !';
                responseMessage.classList.remove('d-none');
            } else {
                // Erreur : affiche un message rouge
                responseMessage.className = 'alert alert-danger';
                responseMessage.textContent = 'Une erreur est survenue. Veuillez réessayer.';
                responseMessage.classList.remove('d-none');
            }
        })
        .catch(error => {
            console.error('Erreur:', error);
            // Erreur : affiche un message rouge
            responseMessage.className = 'alert alert-danger';
            responseMessage.textContent = 'Une erreur est survenue. Veuillez réessayer.';
            responseMessage.classList.remove('d-none');
        })
        .finally(() => {
            // Masque l'overlay de chargement
            hideLoadingOverlay();
        });
});