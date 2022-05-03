<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
        "title" => "first post",
        "slug" => "first-post",
        "author" => "alindra putra",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui unde aut vel delectus blanditiis! Porro non rerum aliquam ipsam veritatis, deserunt iure officia modi aut quae sapiente accusantium quo, voluptas facilis ut vero dolore veniam magni placeat quisquam nam quia? Soluta sint, expedita doloribus accusamus quod vitae aspernatur minima voluptates fugiat? Deserunt nihil molestiae nostrum harum inventore aut magnam voluptatibus beatae incidunt est nam dolore natus illo, minima, vitae velit sit voluptas perspiciatis qui temporibus! Veniam sequi ducimus harum error veritatis sit saepe necessitatibus unde aliquid beatae? Quam, quas accusamus."
    ],
    [
        "title" => "second post",
        "slug" => "second-post",
        "author" => "alindra putra",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui unde aut vel delectus blanditiis! Porro non rerum aliquam ipsam veritatis, deserunt iure officia modi aut quae sapiente accusantium quo, voluptas facilis ut vero dolore veniam magni placeat quisquam nam quia? Soluta sint, expedita doloribus accusamus quod vitae aspernatur minima voluptates fugiat? Deserunt nihil molestiae nostrum harum inventore aut magnam voluptatibus beatae incidunt est nam dolore natus illo, minima, vitae velit sit voluptas perspiciatis qui temporibus! Veniam sequi ducimus harum error veritatis sit saepe necessitatibus unde aliquid beatae? Quam, quas accusamus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui unde aut vel delectus blanditiis! Porro non rerum aliquam ipsam veritatis, deserunt iure officia modi aut quae sapiente accusantium quo, voluptas facilis ut vero dolore veniam magni placeat quisquam nam quia? Soluta sint.",
    ]];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {   $posts = static::all();
       
    return $posts->firstWhere('slug', $slug);
    }
}
