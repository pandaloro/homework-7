<?php

namespace app\models;

class Post
{
    private $postData = [
        [
            'id' => '1',
            'name' => 'pinecone'
        ],
        [
            'id' => '2',
            'name' => 'nathan'
        ]
    ];

    public function getAllPosts() {
        //in future this will come from the database
        return $this->postData;
    }

    public function savePost($newPostData) {
        // Assuming $newPostData is an associative array with 'id' and 'name' keys
        $this->postData[] = $newPostData;
    }
}
