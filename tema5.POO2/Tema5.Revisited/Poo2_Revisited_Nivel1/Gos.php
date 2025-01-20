<?php declare (strict_types=1);

class Gos implements Animal {
    private string $nombre;
    
    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

    public function parlar() {
        echo "guau, guau";
    }
}


?>