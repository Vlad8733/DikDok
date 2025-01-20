
<?php

class Video {

    public $id;
    public $url;
    public $author_id;
    public $name;
    /**
     * @param mixed $id
     * @param mixed $url
     * @param mixed $author_id
     * @param mixed $name
     */
    public function __construct($id,$url,$author_id,$name) {
        $this->id=$id;
        $this->url=$url;
        $this->author_id=$author_id;
        $this->name=$name;
    }

}

$video = new Video(1,'https://example.com', 1, 'Dance');

class Lietotajs {
	public $id;
	public $lietotajvards;
	public $epasts;
	public $parole;
    /**
     * @param mixed $id
     * @param mixed $lietotajvards
     * @param mixed $epasts
     * @param mixed $parole
     */
    public function __construct($id, $lietotajvards,$epasts,$parole)
	{
		$this->id = $id;
		$this->lietotajvards = $lietotajvards;
		$this->epasts = $epasts;
		$this->parole = $parole;
	}
}
