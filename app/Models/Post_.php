<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-posts-pertama',
            'author' => 'Agus Suardiasa',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis corrupti corporis, ipsa fugiat perferendis quo incidunt totam delectus consequuntur quidem architecto ducimus unde, beatae hic repellat a eum sunt odio voluptas natus sint earum vitae omnis esse? Deserunt cumque obcaecati quia fugit, soluta recusandae molestiae enim? Voluptas exercitationem eaque fugit dicta unde, repudiandae adipisci! Eius, animi incidunt et eaque quisquam velit, ducimus aliquam laboriosam nostrum labore veritatis porro ab alias, eveniet molestiae provident officiis. Saepe tenetur iure nisi aut. Repellendus!',
        ],

        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Hans Star',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, libero ducimus! Atque accusamus quod dolorem doloremque eligendi hic, unde, expedita placeat officiis voluptate tempora, doloribus qui iusto dolor recusandae. Saepe molestiae distinctio nihil quos nemo nobis suscipit, perferendis beatae aliquam possimus consequatur placeat veritatis laborum debitis est quisquam cum rem dolore repellat, porro ad sit non voluptatibus laudantium? Est et delectus explicabo, doloremque excepturi quibusdam, expedita perferendis vel porro iste possimus quasi architecto nemo? Minus mollitia dignissimos dolorum similique tempora tenetur quae cumque voluptatem corrupti aliquid repellat necessitatibus, nam aliquam debitis reprehenderit totam repellendus temporibus rem nesciunt pariatur quidem quam.',
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}