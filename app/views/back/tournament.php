<?php require "app/views/back/layouts/header.php" ?>
<main>
    <form action="index.php?action=tournament">
        <input type="text" value="title">
        <input type="date">
        <input type="text" value="content">
        <input type="image">
        <input type="button" action="send">
    </form>
</main>
<?php require "app/views/back/layouts/footer.php" ?>