<?php
class Movie //Sempre in PascalCase
{
	public $title;
	public $vote;
	public $type;
	public $description;
	public $duration;
	public $language;
	public $subtitle;
    public $cast;
    public $register;
    public $year;
    public $new;
    public $productionHouse;

	public function __construct($title, $vote, $type, $description, $duration, $language, cast $cast,)
	{
		$this->title = $title;
		$this->vote = $vote;
		$this->type = $type;
        $this->description = $description;
        $this->duration = $duration;
        $this->language = $language;
        $this->cast = $cast;
	}

	public function newsFilms($year)
	{
		if ( $year > 2023) {
            $this->new = true;
        } else {
            $this->new = false;
        }
	}
}
?>