<?php
    include_once('templates/header.php');

    // Verifica se o ID do post foi passado na URL
    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if($post['id'] == $postId) {
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
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab tempora molestiae ipsa consequatur in eos deleniti nemo aperiam officia fugit quis sunt sint non architecto sapiente laborum, voluptatibus porro incidunt?
            Voluptate illum recusandae possimus dolorum sunt! Perferendis sapiente id voluptas maxime ducimus repellat atque saepe inventore obcaecati, libero ea aut incidunt eum deserunt vel adipisci distinctio assumenda harum. Perferendis, inventore!
            Repellat eligendi vero fuga, eveniet totam sed explicabo omnis nemo accusantium dicta neque maxime excepturi error placeat doloribus nisi minima at sunt modi cum facilis et rem doloremque commodi! Consequuntur?
            Magnam similique suscipit dolor at culpa quasi consequatur quisquam soluta totam facere maiores tenetur temporibus saepe molestias eos, excepturi, minima porro provident sequi, expedita a. Fugit saepe explicabo nihil consequatur.
            Nisi quae aperiam omnis, voluptatum tempora odit! Autem consequatur odio aliquid laborum odit laboriosam veritatis consequuntur accusantium voluptate, ipsum rem sed quisquam quod nulla atque fugiat ex suscipit voluptatibus quia.
        </p>

        <p class="post-content">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab tempora molestiae ipsa consequatur in eos deleniti nemo aperiam officia fugit quis sunt sint non architecto sapiente laborum, voluptatibus porro incidunt?
            Voluptate illum recusandae possimus dolorum sunt! Perferendis sapiente id voluptas maxime ducimus repellat atque saepe inventore obcaecati, libero ea aut incidunt eum deserunt vel adipisci distinctio assumenda harum. Perferendis, inventore!
            Repellat eligendi vero fuga, eveniet totam sed explicabo omnis nemo accusantium dicta neque maxime excepturi error placeat doloribus nisi minima at sunt modi cum facilis et rem doloremque commodi! Consequuntur?
            Magnam similique suscipit dolor at culpa quasi consequatur quisquam soluta totam facere maiores tenetur temporibus saepe molestias eos, excepturi, minima porro provident sequi, expedita a. Fugit saepe explicabo nihil consequatur.
            Nisi quae aperiam omnis, voluptatum tempora odit! Autem consequatur odio aliquid laborum odit laboriosam veritatis consequuntur accusantium voluptate, ipsum rem sed quisquam quod nulla atque fugiat ex suscipit voluptatibus quia.
        </p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul ids="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li>
                    <a href="#"><?= $tag ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li>
                    <a href="#"><?= $category ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>


<?php
    include_once('templates/footer.php');
?>