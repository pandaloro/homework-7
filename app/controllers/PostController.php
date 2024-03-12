<?php

namespace app\controllers;
use app\core\Controller;
class PostController extends Controller
{
//todo make a method to return some posts, post objects should come from the post model class
//also need to make a twig template to show the posts
//an example is in app/controllers/UsersController
public function posts()
    {
    $userModel = new User();
    $template = $this->twig->load('posts.twig');
    $usersData = [
        'users' => $userModel->getAllUsers(),
    ];

    echo $template->render($usersData);
}
}
