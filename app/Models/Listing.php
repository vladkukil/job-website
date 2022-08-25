<?php

namespace App\Models;

class Listing
{
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Title 1',
                'description' => 'Dumb text'
            ],
            [
                'id' => 2,
                'title' => 'Title 1',
                'description' => 'Dumb text'
            ]
        ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach ($listings as $listing) {
            if($listing['id'] == $id)
                return $listing;
        }
        return $listing;
    }
}
