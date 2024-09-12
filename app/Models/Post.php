<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'title-1',
                'title' => 'title 1',
                'author' => 'sadname',  
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident officiis, ducimus quam animi iste exercitationem quae reiciendis. Cum, vitae nobis totam distinctio delectus iusto beatae pariatur tempore! Officia, praesentium laudantium.'
            ],
            [
                'id' => 2,
                'slug' => 'title-2',
                'title' => 'title 2',
                'author' => 'sadname',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident officiis, ducimus quam animi iste exercitationem quae reiciendis. Cum, vitae nobis totam distinctio delectus iusto beatae pariatur tempore! Officia, praesentium laudantium.'
            ]
            ];
    }

    public static function find($slug)
    {
        return  Arr :: first(static::all(), fn ($post) => $post['slug'] == $slug);
    }
}

?>