<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static $products;

    public static function allProducts()
    {
        self::$products = [
            0=>[
                'id'=>1,
                'name'=>'white shirt',
                'price'=>'2000',
                'image'=>'assets/img/11.jpg'
            ],
            1=>[
                'id'=>2,
                'name'=>'Red sharee',
                'price'=>'6000',
                'image'=>'assets/img/14.jpg'
            ],
            2=>[
                'id'=>3,
                'name'=>'black shirt',
                'price'=>'1000',
                'image'=>'assets/img/12.jpg'
            ],
            3=>[
                'id'=>4,
                'name'=>'female red shoos',
                'price'=>'5200',
                'image'=>'assets/img/17.jpg'
            ],
            4=>[
                'id'=>5,
                'name'=>'white shoos',
                'price'=>'3000',
                'image'=>'assets/img/13.jpg'
            ],
            5=>[
                'id'=>6,
                'name'=>'white pant',
                'price'=>'2500',
                'image'=>'assets/img/10.jpg'
            ],
        ];
        return self::$products;
    }
}
