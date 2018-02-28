<?php
declare(strict_types=1);


class People {
    private $name;


    public function __construct(string $name) {
        $this->name = $name;

    }

    public function __toString() {
        return "<b>Name:</b> ".$this->name;
    }

    public function getName() : string {
        return $this->name;
    }

    public function getInfo() {
        echo "Class Information: ", get_class($this);
    }
}
?>