<?php require "app/views/back/layouts/header.php" ?>
<main>
    <!-- section de galerie pour mettre en avant les photos de figurines des membres-->
    <section id="gallery">
        <div class="absolut">
            <form action="index.php?action=galerie">
                <input type="image">
                <input type="text" value="title">
                <input type="text" value="content">
                <input type="button" action="send">
            </form>
        </div>
    </section>
    <!-- plugin jquery de repositionnement d'image à venir (type lightbox) -->
</main>
<?php require "app/views/back/layouts/footer.php" ?>