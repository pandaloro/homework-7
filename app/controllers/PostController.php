<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Post;
class PostController extends Controller
{
// make a method to return some posts, post objects should come from the post model class
//also need to make a twig template to show the posts
//an example is in app/controllers/UsersController

   public function posts()
    {
        $name = $_GET['name'];
        $postModel = new Post();
        header("Content-Type: application/json");
        $posts = $postModel->getAllposts();
        echo json_encode($posts);
        exit();
    
    }

    public function savePost() {
        $name = $_POST['name'] ? $_POST['name'] : false;
        $id = $_POST['id'] ? $_POST['id'] : false;
        $errors = [];

        //validate and sanitize name
        if ($name) {
            //sanitize, htmlspecialchars replaces html reserved characters with their entity numbers
            //meaning they can't be run as code
            //convert double and single quotes
            //treat coe as html5
            $name = htmlspecialchars($name, ENT_QUOTES|ENT_HTML5, 'UTF-8', true);

            //validate text length
            if (strlen($name) < 2) {
                $errors['nameShort'] = 'name is too short';
            }
        } else {
            $errors['requiredName'] = 'name is required';
        }


        //numbers
        if ($id) {
            if ($id < 0 || $id > 120 || !intval($id)) {
                $errors['idInvalid'] = 'id is invalid';
            }
        } else {
            $errors['requiredid'] = 'id is required';
        }

        //email via regular expressions

        //if we have errors
        if (count($errors)) {
            http_response_code(400);
            echo json_encode($errors);
            exit();
        }

        //we could save the data off to be saved here

        $returnData = [
            'name' => $name,
            'id' => $id,
            
        ];
        echo json_encode($returnData);
    }

    public function postsView() {
            $title = 'View Posts';
            include './assets/views/posts/posts.php';
            exit();
    }


}
