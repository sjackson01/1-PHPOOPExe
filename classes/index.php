<?php

//Create Class
class Recipe
{
    //Add property to our recipe class
    private $title;
    public $ingredients =array();
    public $instructions = array();
    public $yeild;
    public $tag = array();
    public $source = "Alina Holligan";

    //Add $title setter
    public function setTitle($title)
    {
    //Object property / argument 
       $this->title = ucwords($title); 
    }

    public function getTitle()
    {
        return $this->title;      
    }

    //Create functiont hat will display recipe title and source
    public function displayRecipe()
    {   //$this->title is one variable 
       return $this->title . " by " . $this->source;
    }

}
//Instantiate object
$recipe1 = new Recipe();
$recipe1->source = "Grandma Holligan ";
//Call setTitle and pass in lowercase title 
$recipe1->setTitle("my first recipe ");


//Instantiate second object
$recipe2 = new Recipe();
$recipe2->source = "Bettery Crocker";
$recipe2->setTitle("my second recipe");

//Call display recipe method on both recipe objects
echo $recipe1->getTitle();
echo $recipe1->displayRecipe();
echo $recipe2->displayRecipe();

?>