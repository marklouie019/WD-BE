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
    public $memoryOrbs = array();
    public $memoryContent = "";

    public function __construct($islandID)
    {
        $this->islandID = $islandID;

        $this->loadIslandData();
        $this->loadMemoryOrbs();
        $this->loadSelectedMemoryContent(1);
    }

    public function getAllIslands()
    {
        $query = "SELECT * FROM islandsOfPersonality";
        $result = executeQuery($query);

        $islands = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $isle = new IslandPersonality($row['islandOfPersonalityID']);
            array_push($islands, $isle);
        }

        return $islands;

    }

    public function loadIslandData()
    {
        $query = "SELECT islandsOfPersonality.image AS contentImage,
                         islandsOfPersonality.name,
                         islandsOfPersonality.shortDescription,
                         islandsOfPersonality.longDescription
                  FROM islandsOfPersonality
                  WHERE islandsOfPersonality.islandOfPersonalityID = '$this->islandID'
                  LIMIT 1";

        $result = executeQuery($query);

        if ($row = mysqli_fetch_assoc($result)) {
            $this->name = $row['name'];
            $this->shortDescription = $row['shortDescription'];
            $this->longDescription = $row['longDescription'];
            $this->image = $row['contentImage'];
        }
    }

    public function loadMemoryOrbs()
    {
        $query = "SELECT * FROM islandContents WHERE islandOfPersonalityID = '$this->islandID'";
        $result = executeQuery($query);

        $counter = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            $memory = new CoreMemory(
                $row['color'],
                $row['image'],
                $row['content'],
                $counter
            );
            array_push($this->memoryOrbs, $memory);
            $counter++;
        }
    }

    public function loadSelectedMemoryContent($selectedMemoryID)
    {
        $query = "SELECT content FROM islandContents WHERE islandContentID = '$selectedMemoryID'";
        $result = executeQuery($query);

        if ($row = mysqli_fetch_assoc($result)) {
            $this->memoryContent = $row['content'];
        }
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