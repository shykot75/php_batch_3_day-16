<?php


namespace App\classes;


class Product{


    public $products = [];

    public function getAllProduct(){
        return [
            0=> [
                'id'            => '1',
                'title'         => 'Smart Shirt',
                'description'   => 'Blog Description',
                'price'        =>  '330',
                'category'     => 'Fashion',
                'image'         => 'a1.jpg',
                'brand'         => 'Yellow'
            ],

            1=> [
                'id'            => '2',
                'title'         => 'Smart Shari',
                'description'   => 'Blog Description',
                'price'        =>  '330',
                'category'     => 'Fashion',
                'image'         => 'a2.jpg',
                'brand'         => 'Red'
            ],
            2=> [
                'id'            => '3',
                'title'         => 'Smart T-shirt',
                'description'   => 'Blog Description',
                'price'        =>  '330',
                'category'     => 'Fashion',
                'image'         => 'a3.jpg',
                'brand'         => 'Maroon'
            ],
            3=> [
                'id'            => '4',
                'title'         => 'Smart T-shirt',
                'description'   => 'Blog Description',
                'price'        =>  '330',
                'category'     => 'Fashion',
                'image'         => 'a1.jpg',
                'brand'         => 'Dark'
            ],
            4=> [
                'id'            => '5',
                'title'         => 'Smart T-shirt',
                'description'   => 'Blog Description',
                'price'        =>  '330',
                'category'     => 'Fashion',
                'image'         => 'a2.jpg',
                'brand'         => 'Yellow'
            ],
            5=> [
                'id'            => '6',
                'title'         => 'Smart T-shirt',
                'description'   => 'Blog Description',
                'price'        =>  '330',
                'category'     => 'Fashion',
                'image'         => 'a3.jpg',
                'brand'         => 'Pink'
            ],
            6=> [
                'id'            => '7',
                'title'         => 'Smart T-shirt',
                'description'   => 'Blog Description',
                'price'        =>  '330',
                'category'     => 'Fashion',
                'image'         => 'a1.jpg',
                'brand'         => 'Green'
            ],
            7=> [
                'id'            => '8',
                'title'         => 'Smart T-shirt',
                'description'   => 'Blog Description',
                'price'        =>  '330',
                'category'     => 'Fashion',
                'image'         => 'a2.jpg',
                'brand'         => 'Blue'
            ],
            8=> [
                'id'            => '9',
                'title'         => 'Smart T-shirt',
                'description'   => 'Blog Description',
                'price'        =>  '330',
                'category'     => 'Fashion',
                'image'         => 'a3.jpg',
                'brand'         => 'Orange'
            ]
        ];
    }


    public function getAllProductById($id) {
        $this->products = $this->getAllProduct();
        foreach($this->products as $product){
            if($product['id'] == $id){
                return $product;
            }
        }
    }

















}