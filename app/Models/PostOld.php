<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "Judul Post Pertama",
            "author" => "Asharul",
            "body" => "
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam nemo totam repellendus minus sequi, veniam quos delectus maiores numquam quasi sapiente illum at doloremque quia veritatis saepe laboriosam a laudantium animi. Similique totam porro beatae neque pariatur cum dolore repellendus? Reiciendis saepe accusamus velit eveniet quos nostrum. Eveniet consectetur maiores eligendi dolores nam corrupti, voluptate laudantium praesentium eaque aperiam pariatur assumenda dolore maxime rerum nulla expedita dicta ad vero nobis qui recusandae enim molestiae? A doloribus iusto natus officia architecto."
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "Judul Post Kedua",
            "author" => "Muhammad",
            "body" => "
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis possimus, velit iure tempora id quisquam accusantium eligendi commodi tempore quia facere. Nam ipsa labore architecto quae rerum vel debitis nisi eligendi assumenda cum. Expedita minima ut id alias possimus molestias adipisci, quis voluptatem sequi, dolorem asperiores eum quasi. Sapiente error culpa quos doloribus optio ratione dolorem vel quae, labore non, omnis ex officia dicta molestias iure veniam, incidunt praesentium earum. Voluptatem cum ducimus placeat veniam, ut aliquam repudiandae molestias officia quas, eius tempore possimus, illo ad recusandae omnis aut enim quae ab sequi eos. Quasi saepe delectus ullam magnam dolore."
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
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        // return $post;
        return $posts->firstWhere('slug', $slug);
    }
}
