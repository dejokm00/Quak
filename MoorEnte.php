<?php

class MoorEnte extends Ente implements QuakFähig, FlugFähig {

    public function anzeigen(){
        echo 'Ich bin eine Moorente';
    }

    public function fliegen()
    {
        echo '*flieg flieg*';
    }

    public function quaken()
    {
        echo '*quak quak*';
    }
}
