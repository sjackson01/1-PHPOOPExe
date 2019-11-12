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

    //Create functiont hat will display recipe title and source
    public function displayRecipe()
    {   //$this->title is one variable 
       return $this->title . " by " . $this->source;
    }

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