<?php declare (strict_types=1);
    //private string $nombre;

    class Gat implements Animal {

        public function __construct(string $nombre) {
            $this->nombre = $nombre;
        }

        public function parlar() : void {
            echo "<br> miau";
        }
}

?>