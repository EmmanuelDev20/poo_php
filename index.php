<?php

include __DIR__ . "/vendor/autoload.php";


use Blog\Author;
use Blog\Category;
use Blog\Post;

// Categorias
$php_category = new Category();
$php_category->set_name("PHP");

$vue_category = new Category();
$vue_category->set_name("Vue");

$EmmanuelDev20 = new Author();
$EmmanuelDev20->set_name("Emmanuel", "Ovares");

$php_post = new Post();
$php_post->add_title("Post sobre funciones en PHP");
$php_post->add_content("En este post se habrá más");
$php_post->add_category($php_category);

$php_post2 = new Post();
$php_post2->add_title("Post sobre funciones en PHP");
$php_post2->add_content("En este post se habrá más");
$php_post2->add_category($php_category);

$php_post3 = new Post();
$php_post3->add_title("Post sobre funciones en PHP");
$php_post3->add_content("En este post se habrá más");
$php_post3->add_category($php_category);

$vue_post = new Post();
$vue_post->add_title("Post de vue");
$vue_post->add_content("Desarrollo de texto de Vue");
$vue_post->add_category($vue_category);

$vue_post2 = new Post();
$vue_post2->add_title("Post de vue");
$vue_post2->add_content("Desarrollo de texto de Vue");
$vue_post2->add_category($vue_category);

$vue_post3 = new Post();
$vue_post3->add_title("Post de vue");
$vue_post3->add_content("Desarrollo de texto de Vue");
$vue_post3->add_category($vue_category);

$vue_post4 = new Post();
$vue_post4->add_title("Post de vue");
$vue_post4->add_content("Desarrollo de texto de Vue");
$vue_post4->add_category($vue_category);

$EmmanuelDev20->create_post($php_post);
$EmmanuelDev20->create_post($php_post2);
$EmmanuelDev20->create_post($php_post3);
$EmmanuelDev20->create_post($vue_post);
$EmmanuelDev20->create_post($vue_post2);
$EmmanuelDev20->create_post($vue_post3);

$author_posts = $EmmanuelDev20->get_posts();

foreach ($author_posts as $post)
{
    echo "El usuario {$EmmanuelDev20->get_full_name()} tiene el siguiente post: <br><br>";
    echo $post->get_post();
    echo "Y tiene {$EmmanuelDev20->created_posts()} posts";
    echo "<br><br><br>";
}
