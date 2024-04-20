<?= $this->extend("layouts/defaults") ?>
<?= $this->section("title") ?>Article<?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1>Articles</h1>

    <?php foreach ($articles as $article): ?>
        <article>
            <h2><?= $article["Title"] ?></h2>
            <p><?= $article["content"] ?></p>
        </article>
    <?php endforeach; ?>
<?= $this->endSection() ?>