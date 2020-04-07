<?php require "app/views/front/layouts/header.php" ?>

<main id="core">
    <!-- Section de mise en avant des principaux tournois du moment -->
    <section class="glowup">
        <div class="tournament1">
            <img src="app/public/img/FWD.png" alt="FWD" class="picture">
            <h2>FWD</h2>
        </div>
        <div class="tournament2">
            <img src="app/public/img/chief40k.jpg" alt="armychief40k" class="picture">
            <h2>Champion du Warp</h2>
        </div>
        <div class="tournament3">
            <img src="app/public/img/interregionaos.png" alt="interregion aos" class="picture">
            <h2>Inter Région AOS</h2>
        </div>
        <div class="tournament4">
            <img src="app/public/img/ruinedcities40k.jpg" alt="figurine" class="picture">
            <h2>Tournoi d'été Vannes</h2>
        </div>
    </section>

    <section class="paintup">
        <!-- selection de figurines en photo-->
        <h2>Les figouz' du moment</h2>
        <div id="slide">
            <div id="precedent" onclick="ChangeSlide(-1)"><</div>
            <div id="suivant" onclick="ChangeSlide(1)">></div>
        </div>
</body>

</html>
    </section>
</main>
<script  src="public/js/slider.js"></script>
<?php require "app/views/front/layouts/footer.php" ?>