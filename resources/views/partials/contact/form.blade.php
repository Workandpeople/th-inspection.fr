<section class="form-section py-5">
    <div class="container">
        <h2 class="text-center mb-4">Contactez-nous</h2>
        <form action="#" method="POST" id="contactForm" class="form">
            <div id="responseMessage" class="alert d-none" role="alert"></div> <!-- Zone d'affichage des messages -->

            <div class="row mb-3">
                <!-- Nom -->
                <div class="col-6">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" id="nom" name="nom" class="form-control" placeholder="Votre nom" required>
                </div>
                <!-- Prénom -->
                <div class="col-6">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Votre prénom" required>
                </div>
            </div>
            <!-- Téléphone -->
            <div class="mb-3">
                <label for="telephone" class="form-label">Téléphone</label>
                <input type="tel" id="telephone" name="telephone" class="form-control" placeholder="Votre numéro de téléphone" required>
            </div>
            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Votre adresse email" required>
            </div>
            <!-- Objet -->
            <div class="mb-3">
                <label for="objet" class="form-label">Objet</label>
                <input type="text" id="objet" name="objet" class="form-control" placeholder="Objet de votre message" required>
            </div>
            <!-- Message -->
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea id="message" name="message" class="form-control" rows="5" placeholder="Votre message" required></textarea>
            </div>
            <!-- Bouton Envoyer -->
            <div class="text-center">
                <button type="submit" class="btn-submit">Envoyer</button>
            </div>
        </form>
    </div>
</section>