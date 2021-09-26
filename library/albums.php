<?php

require_once __DIR__ . '/../class/Album.php';

    function getAlbumes(){
        $json = __DIR__ . "/../data/products.json";
        $jsonData = file_get_contents($json);
        $albums = json_decode($jsonData, true);

        $exit = array_map(function($album)  { //ahora lo asigna en album

            $obj = new Album();
            $obj -> album_id = $album['album_id'];
            $obj -> album_artista = $album['album_artista'];
            $obj -> album_nombre = $album['album_nombre'];
            $obj -> album_canciones = $album['album_canciones'];
            $obj -> album_imagen = $album['album_imagen'];
            return $obj;
        }, $albums);
    
        return $exit;

    }


    function getAlbumById($id) {
        $albums = getAlbumes();

        foreach($albums as $album) {
            if($album->album_id === $id) {
                return $album;
            }
        }

        return null;
    }


?>