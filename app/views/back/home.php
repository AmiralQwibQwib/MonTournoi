<?php require "app/views/back/layouts/header.php" ?>

<main id="core">
    <!-- Section de mise en avant des principaux tournois du moment -->
    <section class="glowup">
        <form action="index.php?action=home">
            <input type="image">
            <input type="text" value="title">
            <input type="button" action="send">
        </form>
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