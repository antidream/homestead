<?php

namespace App;


class News
{
    private static $news = [
        1 => [
            'id' => 1,
            'title' => 'Новость 1',
            'text' => 'А у нас новость 1 и она очень хорошая!',
            'categoryId' => 1
        ],
        2 => [
            'id' => 2,
            'title' => 'Новость 2',
            'text' => 'А тут плохие новости(((',
            'categoryId' => 2
        ],
        3 => [
            'id' => 3,
            'title' => 'Новость 3',
            'text' => 'А тут плохие новости(((',
            'categoryId' => 1
        ],
        4 => [
            'id' => 4,
            'title' => 'Новость 4',
            'text' => 'А тут плохие новости(((',
            'categoryId' => 2
        ]
    ];

    public static function getNews()
    {
        return static::$news;
    }

    public static function getNewsId($id)
    {
        return static::$news[$id];
    }

    public static function getCategoryNews($name)
    {
        $id = category::getCategoryIdByName($name);
        $news = [];
        foreach (static::$news as $item) {
            if ($item['categoryId'] == $id) {
                $news[] = $item;
            }
        }
        return $news;
    }

}
