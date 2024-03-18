<?php
require_once '../app/vendor/autoload.php';
require_once "../app/core/Controller.php";
require_once "../app/models/User.php";
require_once "../app/models/Post.php";
require_once "../app/controllers/MainController.php";
require_once "../app/controllers/UserController.php";
require_once "../app/controllers/PostController.php";
use app\controllers\MainController;
use app\controllers\UserController;
use app\controllers\PostController;


$url = strtok($_SERVER["REQUEST_URI"], '?');
//todo add a switch statement router to route based on the url
//if it is "/posts" return an array of posts via the post controller
//if it is "/" return the homepage view from the main controller
//if it is something else return a 404 view from the main controller
$mainController = new MainController();


if ($_SERVER['REQUEST_METHOD'] === 'POST' && $url == '/posts') {
   echo 'request method is post';
   $postController = new PostController();
       $postController->savePost();
} else if ($_SERVER['REQUEST_METHOD'] === 'GET' && $url == '/posts')
{
    $postController = new PostController();
    $postController->postsView();
} else
{
    switch ($url) {
    case '/posts':
        { 
            $postController = new PostController();
            // Return an array of posts via the PostController
            $postController->postsView();  
        }
        break;
    case '/': 
        // Return the homepage view from the MainController
        $mainController->homepage();
        break;
    default:
        // Return a 404 view from the MainController
        $mainController->notFound();
        break;
}
}
