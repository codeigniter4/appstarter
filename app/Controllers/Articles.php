<?php

namespace App\Controllers;

class Articles extends BaseController
{
    public function index()
    {

        // $db = db_connect();

        $data = [
            ["Title" => "One", "content" => "The first"],
            ["Title" => "Two", "content" => "Some content"]
        ];

        return view("Articles/index", [
            "articles" => $data
        ]);
    }
}