<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    // use HasFactory;
   private static $blog_posts = [
        [
            "judul" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Yudi Gunawan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque voluptates tenetur nesciunt officiis, nemo minus, tempora enim optio laborum id veniam, asperiores voluptatibus eveniet! Dolorum reiciendis a doloremque ullam aperiam."
        ],
        [
            "judul" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "Rafi",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis voluptas reprehenderit sequi eligendi tenetur animi nostrum quia corrupti asperiores, ea a voluptatum obcaecati consequatur vero minima id ullam voluptate. Incidunt dolor qui temporibus harum alias deleniti ea accusamus laudantium at, molestiae soluta ipsum corrupti fugiat, aperiam assumenda officiis expedita maiores, in est reiciendis! Quo quos sint inventore assumenda molestiae accusamus, rem nostrum ratione suscipit? Architecto rerum deserunt fugiat consequatur aliquam at esse aut, quam quo dolore eum laborum voluptate nesciunt distinctio cumque adipisci quasi. Consequuntur nisi distinctio, animi vel tempora sed saepe quo nesciunt cum explicabo itaque fugit corrupti tenetur, architecto perspiciatis quam necessitatibus facilis blanditiis assumenda sapiente! Doloribus officia ad nobis nulla, maxime assumenda nam itaque quisquam iste quibusdam officiis obcaecati repudiandae fuga! Quasi eos beatae voluptas, nesciunt veniam aliquid illum tenetur odio reprehenderit laborum consequuntur, eligendi exercitationem quos ex mollitia voluptatem magnam sed temporibus quo perspiciatis autem recusandae. Facere eveniet esse in quasi vero voluptatum ex doloremque adipisci labore quos quisquam aut, vitae unde voluptate deleniti est nisi. Et vel placeat nesciunt veritatis modi, voluptates sint excepturi aperiam quaerat alias expedita ex soluta autem ipsum, iusto voluptatibus omnis nulla cumque eum. Voluptate excepturi quidem sed dignissimos neque nobis."
        ]
        ];

        public static function all(){
            return collect(self::$blog_posts);
        }

        public static function find($slug){
                $posts = static::all();
                return $posts->firstWhere('slug' ,$slug);
        }
}
