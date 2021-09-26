<?php

require_once __DIR__ . '/../library/albums.php';

$albums = getAlbumes();

?>

<section class="sectionUnoProducts container pb-5">
<h2 class="pb-5">Productos</h2>
    <div class="albumsList row text-center pb-5">
        <?php
        foreach($albums as $album): ?>
        <ul class="albumsLink col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-5">
            <li class="albumsItem">
                <div>
                    <h3><a href="index.php?s=products_view&id=<?= $album->album_id;?>"><?= $album->album_nombre;?></a></h3>
                    <h4 class="pb-3"><?= $album->album_artista;?></h4>
                </div>
                    <a href="index.php?s=products_view&id=<?= $album->album_id;?>">
                        <picture class="albumsItemImg pb-5">
                            <source media="(min-width:992px)" srcset="<?= 'img/img_albums/' . $album->album_imagen;?>">
                            <img src="<?= 'img/img_albums/min_' . $album->album_imagen; ?>" alt="<?= $album->album_nombre;?>">
                        </picture>
                    </a>
            </li>
        </ul>
        <?php
        endforeach; ?>
    </div>
</section>