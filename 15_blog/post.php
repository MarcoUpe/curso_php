<?php
    include_once("templates/header.php");

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
                <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi asperiores magni saepe illo dignissimos reiciendis accusantium laudantium sunt quos distinctio sequi, adipisci necessitatibus laborum? Voluptates alias quidem in totam adipisci!
                Reiciendis laborum expedita, unde sequi nam voluptatibus voluptatum vel, tempore iste repellendus commodi rerum. Dolor, eos, delectus pariatur odio accusantium debitis laboriosam deleniti voluptatibus earum, quo accusamus iure rerum aut!
                Enim quod debitis ullam tenetur, nemo laudantium, ratione architecto eaque quia eveniet, tempora quidem rerum. At excepturi cupiditate sequi tenetur. Ex dicta non suscipit saepe cumque. Aliquam aliquid beatae fugiat!
                Aliquam obcaecati iure architecto at laudantium provident possimus ipsa placeat quibusdam! Repellendus labore, rem quas voluptas in quasi numquam debitis blanditiis fuga ratione natus velit aliquid sapiente accusantium. Ducimus, impedit.
                Possimus suscipit doloribus veniam placeat ipsam dolore tempore dignissimos! Omnis, minima! Minus sunt deleniti ducimus velit tempora itaque optio quisquam suscipit consequatur veritatis dolorum recusandae, mollitia eum nihil amet distinctio.</p>
                <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi asperiores magni saepe illo dignissimos reiciendis accusantium laudantium sunt quos distinctio sequi, adipisci necessitatibus laborum? Voluptates alias quidem in totam adipisci!
                Reiciendis laborum expedita, unde sequi nam voluptatibus voluptatum vel, tempore iste repellendus commodi rerum. Dolor, eos, delectus pariatur odio accusantium debitis laboriosam deleniti voluptatibus earum, quo accusamus iure rerum aut!
                Enim quod debitis ullam tenetur, nemo laudantium, ratione architecto eaque quia eveniet, tempora quidem rerum. At excepturi cupiditate sequi tenetur. Ex dicta non suscipit saepe cumque. Aliquam aliquid beatae fugiat!
                Aliquam obcaecati iure architecto at laudantium provident possimus ipsa placeat quibusdam! Repellendus labore, rem quas voluptas in quasi numquam debitis blanditiis fuga ratione natus velit aliquid sapiente accusantium. Ducimus, impedit.
                Possimus suscipit doloribus veniam placeat ipsam dolore tempore dignissimos! Omnis, minima! Minus sunt deleniti ducimus velit tempora itaque optio quisquam suscipit consequatur veritatis dolorum recusandae, mollitia eum nihil amet distinctio.</p>
        </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
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