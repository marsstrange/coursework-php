<?php

namespace App;

class Post
{
    public string $method; //$_SERVER['REQUEST_METHOD'];
    public string $q; // = $_GET['q']; //$_GET, $_POST — суперглобальные переменные

    /**
     * @param string $method
     * @param string $q
     */
    public function __construct(string $method, string $q)
    {
        $this->method = $method;
        $this->q = $q;
    }



}