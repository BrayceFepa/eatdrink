<?php

$data = array(

    "0" => array(
        "image" => "images/product_2.3.jpg",
        "name" => "chicken burger",
        "price" => "3000 fcfa",
        "add" => "Add to cart",
    ),

    "1" => array(
        "image" => "images/product_01.1.jpg",
        "name" => "royal cheese burger",
        "price" => "1500 fcfa",
        "add" => "Add to cart",
    ),

    "2" => array(
        "image" => "images/product_01.3.jpg",
        "name" => "classic hamburger",
        "price" => "1500 fcfa",
        "add" => "Add to cart",
    ),

    "3" => array(
        "image" => "images/product_01.jpg",
        "name" => "cheese burger",
        "price" => "1500 fcfa",
        "add" => "Add to cart",
    ),


    "4" => array(
        "image" => "images/product_2.1.jpg",
        "name" => "vegetarian pizza",
        "price" => "4500 fcfa",
        "add" => "Add to cart",
    ),


    "5" => array(
        "image" => "images/product_2.2.jpg",
        "name" => "chicken burger",
        "price" => "3000 fcfa",
        "add" => "Add to cart",
    ),


    "6" => array(
        "image" => "images/product_4.3.png",
        "name" => "maxican green wave",
        "price" => "3000 fcfa",
        "add" => "Add to cart",
    ),


    "7" => array(
        "image" => "images/product_3.1.jpg",
        "name" => "double cheese margherita",
        "price" => "4500 fcfa",
        "add" => "Add to cart",
    ),


    "8" => array(
        "image" => "images/product_4.2.jpg",
        "name" => "pizza with mushroom",
        "price" => "4500 fcfa",
        "add" => "Add to cart",
    ),


    "9" => array(
        "image" => "images/product_2.3.jpg",
        "name" => "chicken burger",
        "price" => "3000 fcfa",
        "add" => "Add to cart",
    ),

    "10" => array(
        "image" => "images/product_01.1.jpg",
        "name" => "royal cheese burger",
        "price" => "1500 fcfa",
        "add" => "Add to cart",
    ),

    "11" => array(
        "image" => "images/product_01.3.jpg",
        "name" => "classic hamburger",
        "price" => "1500 fcfa",
        "add" => "Add to cart",
    ),

);

$json = json_encode($data);
file_put_contents('repas.json', $json);
