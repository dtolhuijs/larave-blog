<!DOCTYPE html>
<title>My Blog</title>
<link rel="stylesheet" href="/css/app.css">
<script rel="script" src="/js/app.js"></script>

<body>
    <?php foreach ($posts as $post) :?>
        <article>
            <?= $post; ?>
        </article>
    <?php endforeach;?>
</body>

