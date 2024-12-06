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

    public function __construct($islandID, $name, $shortDescription, $longDescription, $image)
    {
        $this->islandID = $islandID;
        $this->name = $name;
        $this->shortDescription = $shortDescription;
        $this->longDescription = $longDescription;
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

    public function buildIsland()
    {
        return '<h1 class="pt-5">' . $this->name . '</h1>
            <div class="d-flex justify-content-center">
              <img class="img-fluid mx-auto" src="assets/img/' . $this->image . '">
            </div>
            <p class="mx-auto">' . $this->longDescription . '</p>';
    }
    public function isIslandActive($status)
    {
        $this->status = $status ? 'active' : '';
    }
    public function getIslandQuery()
    {
        $islandQuery = "SELECT islandsOfPersonality.image AS contentImage,
                islandsOfPersonality.name,
                islandsOfPersonality.shortDescription,
                islandsOfPersonality.longDescription,
                islandContents.* 
                FROM islandsOfPersonality JOIN islandContents 
                ON islandsOfPersonality.islandOfPersonalityID = islandContents.islandOfPersonalityID
                WHERE islandsOfPersonality.islandOfPersonalityID = '$this->islandID' LIMIT 1";
        $islandsResult = executeQuery($islandQuery);
    }
}

class CoreMemory
{
    public $color;
    public $image;
    public $content;
    public $memoryNum;
    public function __construct($color, $image, $content, $memoryNum)
    {
        $this->color = $color;
        $this->image = $image;
        $this->content = $content;
        $this->memoryNum = $memoryNum;
    }

    public function buildMemory()
    {
        return '<div class="col-4">
                  <div class="core-memory" id="memory' . $this->memoryNum . '"
                    onclick="viewMemory(\'memory' . $this->memoryNum . '\')"
                    data-description="' . htmlspecialchars($this->content) . '">
                    <img src="assets/img/' . $this->image . '">
                    <h4>Core Memory<br> ' . $this->memoryNum . '</h4>
                  </div>
                </div>';
    }
}

?>