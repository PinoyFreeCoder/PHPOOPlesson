<?php
include_once('class.php');
class Male extends Student
{ 
    public $color = "blue";

    function get_color_uniform()
    {
        return $this->name." uniform color is ".$this->color;
    }
}