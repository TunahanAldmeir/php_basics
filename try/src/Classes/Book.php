<?php
//inheritance
class Book
{
    protected $title;
    protected $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }
    public function getTitle() {
        echo $this->title . '<br />';
    }

}
class EBook extends Book
{
    protected $format;

    public function __construct($title, $author, $format)
    {
        parent::__construct($title, $author); // Üst sınıfın constructor'ını çağırma
        $this->format = $format;
    }
    public function getFormat(){
        echo $this->format . '<br />';
    }
}

