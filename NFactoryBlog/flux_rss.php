<?php
header('Content-Type: application/rss+xml');
$articles = $bdd->query('SELECT * FROM t_articles ORDER BY ARTDATE DESC LIMIT 0,25');
$lastBuildDate = $bdd->query('SELECT ARTDATE FROM t_articles ORDER BY ARTDATE DESC LIMIT 0,1');
$lastBuildDate = $lastBuildDate->fetch()['ARTDATE'];
?>
<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0">
    <channel>
        <title>NFactoryBlog</title>
        <description>Ceci est un exemple de flux RSS 2.0</description>
        <lastBuildDate><?= date(DATE_RSS, strtotime($lastBuildDate)) ?></lastBuildDate>
        <link>http://localhost/NFactoryBlog.com/index.php/</link>
        <?php while($a = $articles->fetch()) { ?>
            <item>
                <title><?= $a['ARTTITRE'] ?></title>
                <description><?= html_entity_decode(substr($a['ARTCONTENU'], 0, 250).'...') ?></description>
                <pubDate><?= date(DATE_RSS, strtotime($a['ARTDATE'])) ?></pubDate>
                <link>http://localhost/NFactoryBlog.com/index.php?page=view&id=<?= $a['ID_ARTICLE'] ?>?></link>
                <image>
                    <url>http://www.example.org/miniatures/<?= $a['ID_ARTICLE'] ?>.jpg</url>
                    <link>http://localhost/NFactoryBlog.com/index.php?page=view&id=<?= $a['ID_ARTICLE'] ?></link>
                </image>
            </item>
        <?php } ?>
    </channel>
</rss>