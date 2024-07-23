<?php 

class Movies
{

    public $title;
    public $rating;


    public function __construct($title, $rating)
    {
        $this->title = $title;
        $this->rating = $rating;
    }

    public function get_title()
    {
        return $this->title;
    }

    public function get_rating()
    {
        return $this->rating;
    }

    public function set_title($title)
    {
        $this->title = $title;
    }

    public function set_rating($rating)
    {
        $this->rating = $rating;
    }       

}

?>