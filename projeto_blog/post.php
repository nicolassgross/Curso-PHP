<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {

        $postID = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            
            if($post['id'] == $postID) {
                $currentPost = $post;
            }
        }
    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>./img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum delectus error earum, tempore, ut consequuntur iure molestiae eveniet sequi, maxime asperiores? Officia delectus cupiditate esse dicta nemo ab saepe corporis.
            Aperiam velit pariatur obcaecati, enim soluta delectus qui fuga autem excepturi, nostrum quibusdam nobis? Vero eum at alias minima distinctio! Quasi consequuntur porro cumque molestias, nisi laudantium corrupti velit quae!
            Est cum qui magni dolor ipsa possimus, harum, voluptate suscipit sapiente maiores eligendi veniam illum quod. Sapiente ipsum expedita mollitia eligendi quos, sint sunt tempore optio voluptatum. Fuga, in dignissimos.
            Culpa cumque dicta corrupti quaerat dolores quos, numquam quibusdam. Sit optio quisquam, sunt eum enim at iure. A beatae veritatis corporis quis, ipsa modi aliquid vel illo tempora. Necessitatibus, facilis!
            Labore ipsum in sint aliquid ea nostrum sed consectetur aspernatur tenetur error cum obcaecati ab excepturi veritatis dicta, accusamus impedit doloremque delectus eligendi. Nam doloremque voluptas in aliquid officia ab.</p>
            </div>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>     
            </ul>
            <h3 id="categorie-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?> 
            </ul>
        </aside>
    </main>
<?php
    include_once("templates/footer.php");
?>  