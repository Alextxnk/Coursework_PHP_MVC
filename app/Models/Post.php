<?php

namespace App\Models;

class Post {
    public function storePost($imgUrl, $data)
    {
        $data['thumbnail'] = $imgUrl;
        $query = sprintf(
            "INSERT INTO %s (%s) VALUES(%s)",
            "posts",
            ":" . implode(', :', array_keys($data))
        );

        try {
            $stm = connect()->prepare($query);
            $stm->execute($data);
        } catch (\Throwable $th) {
            die($th->getMessage());
        }
    }
}
