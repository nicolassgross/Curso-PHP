<?php
    include_once("templates/header.php")
?>
    <div class="container">
        <?php include_once("templates/backbtn.html"); ?>
        <h1 id="main-title">Criar Contato</h1>
        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="name">Nome do contato</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome aqui." required>
            </div>
            <div class="form-group">
                <label for="phone">Telefone do contato</label>
                <input type="text" class="form-control" id="phone" phone="phone" placeholder="Digite o telefone aqui." required>
            </div>
            <div class="form-group">
                <label for="details">Detalhes do contato</label>
                <textarea type="text" class="form-control" id="details" details="details" placeholder="Digite os detalhes aqui." rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
<?php
    include_once("templates/footer.php")
?>