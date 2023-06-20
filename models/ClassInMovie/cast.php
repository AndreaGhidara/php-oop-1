<?php
class cast
{
    public $register;
	public $actors;
	public $audio;
	public $video;

    public function __construct($register, $actors, $audio, $video)
	{
		$this->register = $register;
		$this->actors = $actors;
		$this->audio = $audio;
        $this->video = $video;
    }   

}
?>