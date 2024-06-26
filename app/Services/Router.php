<?php

namespace App\Services;

class Router
{
    private static $list = [];

    /**
     * The method registers a route for a regular page
     * @param $uri
     * @param $page_name
     * @return void
     */
    public static function page($uri, $page_name){
        self::$list[] = [
            'uri' => $uri,
            'page_name' => $page_name
        ];
    }

    /**
     * @return void
     */

    public static function enable(){
        $query = $_GET['q'];
        foreach(self::$list as $item){
            if($item['uri'] === '/' . $query){
                require_once "views/pages/" . $item['page_name'] . ".php";
                die();
            }
        }
        self::not_found_page();
    }

    private static function not_found_page(){
        require_once "views/errors/404.php";
    }
}