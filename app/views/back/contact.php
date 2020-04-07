<?php require "app/views/back/layouts/header.php" ?>
<main>
    <form id="contact" action="contact.php" method="post">
        <fieldset>
            <!--premier bloc-->
            <legend>Vos coordonnées</legend>
            <div class="colonne">

                <p><label for="nom">Votre pseudo</label>
                    <input type="text" name="nom" id="nom" placeholder="tapez votre pseudo">
                </p>
            </div>
            <div class="colonne">
                <p><label for="email">Votre E-mail</label>
                    <input type="email" name="email" id="email" placeholder="E-mail">
                </p>
            </div>
        </fieldset>
        <!--deuxieme bloc-->
        <fieldset>
            <legend>Votre Message</legend>
            <!--bouton type checkbox pour choisir son the favori-->
            <p>Quelle est votre Faction ?:
                <input type="checkbox" name="faction" value="imperium" id="imperium">
                <label for="imperium" class="petit">Imperium</label>
                <input type="checkbox" name="faction" value="xenos" id="xenos">
                <label for="xenos" class="petit">Xenos</label>
                <input type="checkbox" name="faction" value="chaos" id="chaos">
                <label for="chaos">Chaos</label>
            </p>
            <p><label for="titre">Titre</label>
                <input type="text" name="titre" id="titre" placeholder="Votre titre">
            </p>
            <!--ici un textarea pour que l'utilisateur laisse un commentaire-->
            <p><label for="message">Votre Message</label>
                <textarea name="message" id="message" placeholder="Tapez votre message" cols="100" rows="10"></textarea>
            </p>
        </fieldset>
        <!--Bouton pour envoyer ou reinitialiser le formulaire-->
        <p class="bouton">
            <input type="submit" value="Envoyer">
            <input type="reset" value="Annuler">
        </p>
    </form>
</main>
<?php require "app/views/back/layouts/footer.php" ?>