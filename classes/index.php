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
$recipe1->source = "Grandma Holligan ";
$recipe1->title = "My First Recipe";

//Instantiate second object
$recipe2 = new Recipe();
$recipe2->source = "Bettery Crocker";
$recipe2->title = "My Second Recipe";

//Call display recipe method on both recipe objects
echo $recipe1->displayRecipe();
echo $recipe2->displayRecipe();

?>