<?php

class IslandPersonality
{
    public $islandID;
    public $name;
    public $shortDescription;
    public $longDescription;
    public $color;
    public $image;
    public $status = 'active';

    public function __construct($islandID, $name, $shortDescription, $image)
    {
        $this->islandID = $islandID;
        $this->name = $name;
        $this->shortDescription = $shortDescription;
        $this->image = $image;
    }

    public function buildCard()
    {
        return '<div class="carousel-item ' . $this->status . '">
                                    <a href="view.php?islandOfPersonalityID=' . $this->islandID . '">
                                        <img src="assets/img/' . $this->image . '"
                                            class="island-li d-block w-100" alt="' . $this->name . '">
                                        <div class="carousel-caption">
                                            <h5>' . $this->name . '</h5>
                                            <p class="description">' . $this->shortDescription . '</p>
                                        </div>
                                    </a>
                                </div>';
    }

    public function isIslandActive($status)
    {
        $this->status = $status ? 'active' : '';

    }
}

?>