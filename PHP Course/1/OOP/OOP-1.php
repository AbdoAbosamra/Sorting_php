<?php
class Post{
    private $auther;
    private $title;
    private $content;
    private $comment = [];
    // use in intialization just one time can not to modify
    // use for madontory propeties
    public function __construct($title , $content , $auther)
    {
        $this->title = $title;
        $this->content = $content;
        $this->auther = $auther;
    }
    // some setters to set values
    public function setAuther($auther)
    {
        $this->auther = $auther;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setContent($content)
    {
        $this->content = $content;

    }

    public function getContent()
    {
        return $this->content;
    }
    public function getAuther()
    {
        return $this->auther;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function displayPost()
    {
        echo "Title: $this->title" .PHP_EOL;
        echo "Content: $this->content".PHP_EOL;
        echo "author: $this->auther".PHP_EOL;
    }
    public function addComment(Comment $comment){
        $this->comment[] = $comment;
    }
    public function dispay_comment():void{
        foreach ($this->comment as $comment){
            $comment->displayComment();
        }
    }
}

class Comment
{
    private $content;
    private $author;
    public  function __construct($content , $author)
    {
        $this->content =$content;
        $this->author = $author;
    }
    public function setContent($content)
    {
        $this->content =$content;
    }
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getContent()
    {
        return $this->content;
    }
    public  function getAuthor()
    {
        return $this->author;
    }

    public  function displayComment()
    {
        echo "Content: $this->content";
        echo "Author: $this->author";

    }
}

class Blog
{
    private $posts = [];

    public function addPost(Post $post)
    {
        $this->posts[]= $post;
    }
    public function display_posts()
    {
        foreach ($this->posts as $post){
            $post->displayPost();
            echo "<hr>";
        }
    }
}

// Create Posts
$post1 = new Post("Introduction to OOP", "Object-Oriented Programming (OOP) is a programming paradigm.", "John Doe");
$post2 = new Post("PHP Basics", "PHP is a server-side scripting language.", "Jane Smith");

// Create Comments
$comment1 = new Comment("Great post!", "Alice");
$comment2 = new Comment("I learned a lot.", "Bob");

// Add comments to posts
$post1->addComment($comment1);
$post2->addComment($comment2);

// Create a Blog
$blog = new Blog();

// Add posts to the blog
$blog->addPost($post1);
$blog->addPost($post2);

// Display all posts
$blog->display_posts();
$post1->dispay_comment();

// inhertiance Example
class Animal
{
    public function speak(){
        echo "Animal Speak";
    }
}

class Dog extends Animal
{

}

$spark = new Dog();
$spark->speak();

// Example for Polymorthism
interface shape
{
    public function calculateArea($a);
}

class squre implements shape
{
    private $tall;
    // way of implementing shape
    public function calculateArea($a)
    {
        $this->tall = $a;
        return $this->tall * $this->tall;
    }
}
class teriable implements shape
{
    private $tall;
    private $hight =12;
    // way of implementing shape
    public function calculateArea($a)
    {
        $this->tall = $a;
        return $this->tall * $this->hight;
    }
}
$s = new squre();
echo "The Area for Squre is: " . $s->calculateArea(10);
$t = new teriable();
echo "The area for Trivable is :" .$t->calculateArea(20);
/*
$class = "Person";
$object = new $class;
// is equivalent to
$object = new Person;
*/