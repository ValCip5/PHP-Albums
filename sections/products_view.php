<?php

require_once __DIR__ . '/../library/albums.php';

$id = (int) $_GET['id'];

$album = getAlbumById($id);

if (!$album) {
    header('Location: index.php?s=404');
    exit;
}
?>

<section class="sectionUnoProductsView">
    <div class="container">
                <h2><?= $album->album_nombre;?></h2>
                <h3><?= $album->album_artista;?></h3>
        <div class="row mt-5 albumsList p-5">
                <div class="col-sm-12 col-md-6 productsImg text-end">
                    <picture>
                        <source srcset="<?= 'img/img_albums/' . $album->album_imagen;?>" media="(min-width:992px)">
                        <img src="<?= 'img/img_albums/min_' . $album->album_imagen;?>" alt="<?= $album->album_nombre;?>">
                    </picture>
                </div>
                <div class="col-sm-12 col-md-6 text-start">
                    <ul><?php
                        foreach($album -> album_canciones as $cancion): ?>
                            <li><?= $cancion ?></li>
                        <?php
                        endforeach;?>
                    </ul>
                </div>
        </div>
    </div>
</section>
