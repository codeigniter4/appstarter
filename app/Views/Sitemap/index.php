<?= $this->extend("layouts/defaults") ?>
<?= $this->section("title") ?>Sitemap<?= $this->endSection() ?>

<?= $this->section("content") ?>
<?= '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($urls as $url): ?>
    <url>
        <loc><?= htmlspecialchars($url['url']) ?></loc>
        <changefreq><?= htmlspecialchars($url['changefreq']) ?></changefreq>
        <priority><?= htmlspecialchars($url['priority']) ?></priority>
    </url>
<?php endforeach; ?>
</urlset>
</pre>
<?= $this->endSection() ?>
