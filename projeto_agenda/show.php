<?php
    include_once("templates/header.php")
?>
    <div class="container" id="view-contact-container">
        <?php include_once("templates/backbtn.html"); ?>
        <h1 id="main-title"><?= $contacts['name'] ?></h1>
        <p class="bold">Telefone:</p>
        <p id="main-title"><?= $contacts['phone'] ?></p>
        <p class="bold">Detalhes:</p>
        <p id="main-title"><?= $contacts['details'] ?></p>
    </div>
<?php
    include_once("templates/footer.php")
?>