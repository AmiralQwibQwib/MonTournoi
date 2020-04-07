<?php require "app/views/back/layouts/header.php" ?>

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
        <div class="row">
			<div>
				<img name="slide" id="slide" width="1200px" height="800px">	
			</div>
			<button id="left-arrow">
				&#10094;
			</button>
			<button id="right-arrow">
				 &#10095;
			</button>		
		</div>
    </section>
</main>
<script  src="public/js/slider.js"></script>
<?php require "app/views/back/layouts/footer.php" ?>