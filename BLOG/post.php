
<?php
    include_once("templates/header.php");

    if(isset($_GET['id']))
    {
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post)
        {
            if($post['id'] == $postId)
            {
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
                <img src="<?= $BASE_URL ?>img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">

            </div>
            <p class="post-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam ab illo facere nam facilis aperiam laboriosam voluptatum ullam eos, sunt commodi quis distinctio quia, omnis accusamus asperiores rerum, ipsam provident.
                Non quam error vel quasi similique, et nulla? Molestiae eligendi perferendis ullam numquam blanditiis illum, maiores labore corporis illo dolorem minima eaque temporibus delectus nihil ea quos nam. Eos, laudantium?
                Quidem aliquid deleniti accusantium, illum reiciendis eligendi quas ex ea! Deleniti modi ut, pariatur exercitationem vel, maiores numquam vero in amet reiciendis, esse quos culpa dolores quasi eveniet aliquid voluptas.
                Doloremque impedit labore excepturi ducimus sed amet corrupti rerum tenetur suscipit accusamus. Consequatur culpa, quibusdam repellendus reiciendis temporibus exercitationem beatae mollitia expedita ad, placeat labore sunt cumque veritatis maiores modi!
                Veritatis debitis, minima quam corrupti, itaque soluta tempore libero laboriosam maiores provident unde. A tempora qui voluptas animi aliquam sequi asperiores neque, rem architecto, saepe aliquid voluptates ex laborum ullam?
            </p>
            <p class="post-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam ab illo facere nam facilis aperiam laboriosam voluptatum ullam eos, sunt commodi quis distinctio quia, omnis accusamus asperiores rerum, ipsam provident.
                Non quam error vel quasi similique, et nulla? Molestiae eligendi perferendis ullam numquam blanditiis illum, maiores labore corporis illo dolorem minima eaque temporibus delectus nihil ea quos nam. Eos, laudantium?
                Quidem aliquid deleniti accusantium, illum reiciendis eligendi quas ex ea! Deleniti modi ut, pariatur exercitationem vel, maiores numquam vero in amet reiciendis, esse quos culpa dolores quasi eveniet aliquid voluptas.
                Doloremque impedit labore excepturi ducimus sed amet corrupti rerum tenetur suscipit accusamus. Consequatur culpa, quibusdam repellendus reiciendis temporibus exercitationem beatae mollitia expedita ad, placeat labore sunt cumque veritatis maiores modi!
                Veritatis debitis, minima quam corrupti, itaque soluta tempore libero laboriosam maiores provident unde. A tempora qui voluptas animi aliquam sequi asperiores neque, rem architecto, saepe aliquid voluptates ex laborum ullam?
            </p>
        </div>

        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li> <a href="#"><?= $tag ?></a> </li>
                <?php endforeach; ?>
            </ul>
            
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li> <a href="#"><?= $category ?></a> </li>
                <?php endforeach; ?>
            </ul>
        </aside>

    </main>
</body>
</html>