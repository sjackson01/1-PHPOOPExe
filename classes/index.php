<?php

//Create Class
class Recipe
{
    //Add property to our recipe class
    public $title;
    public $ingredients =array();
    public $instructions = array();
    public $yeild;
    public $tag = array();
    public $source = "Alina Holligan";

}
//Instantiate object and store in variable
$recipe1 = new Recipe();

var_dump($recipe1);

?>