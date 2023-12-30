<?php

namespace App\Models;

class Listing {
     public static function all (){
        return [
            [
                'id'=> 1,
                'title' => 'Job One',
                'description' => 'Yummy'
            ],
            [
                'id'=> 2,
                'title' => 'Job two',
                'description' => 'Yummy'
            ]
            ];
     }
     public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
            if($listing['id'] == $id )
            return $listings;
        }
     }
}
