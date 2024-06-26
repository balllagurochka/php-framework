<?php

namespace App\Services;

class Router
{
    private static $list = [];
    public static function page($uri, $page_name){
        self::$list[] = [
            'uri' => $uri,
            'page_name' => $page_name
        ];
    }

    public static function enable(){
        $query = $_GET['q'];
        foreach(self::$list as $item){
            if($item['uri'] === '/' . $query){
                require_once "views/pages/" . $item['page_name'] . ".php";
            }
        }
    }
}