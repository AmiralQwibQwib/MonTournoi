<?php require "app/views/back/layouts/header.php" ?>
<main>
    <form action="index.php?action=about">
        <input type="text" value="title">
        <input type="text" value="content">
        <input type="button" action="send">
    </form>
</main>
<?php require "app/views/back/layouts/footer.php" ?>