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
//Instantiate object
$recipe1 = new Recipe();

//Access object properties by referncing its name and the property
//Entire reference is one variable
echo $recipe1->source;

//Set the property
$recipe1->source = "Grandma Holligan";

//Create second object
$recipe2 = new Recipe();
$recipe2->source = "Bettery Crocker";
Echo $recipe1->source;
Echo $recipe2->source;


?>