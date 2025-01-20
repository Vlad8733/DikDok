
<?php

class Video {

    public $id;
    public $url;
    public $author_id;
    public $name;

    public function __construct($id,$url,$author_id,$name) {
        $this->id=$id;
        $this->url=$url;
        $this->author_id=$author_id;
        $this->name=$name;
    }

}

$video = new Video(1,'https://example.com', 1, 'Dance');
