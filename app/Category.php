<?php

namespace App;

class Category
{
    private static $category = [
        [
            'categoryId' => 1,
            'categoryName' => 'Спорт',
            'categoryPath' => 'Sport'
        ],
        [
            'categoryId' => 2,
            'categoryName' => 'Финансы',
            'categoryPath' => 'Finance'
        ]
    ];

    public static function getCategory() {
        return static::$category;
    }

    public static function getCategoryIdByName($path) {
        $id = null;
        foreach (static::$category as $category) {
            if($path == $category['categoryPath']) {
                $id = $category['categoryId'];
                break;
            }
        }
        return $id;
    }
}
