<?php

class StockEnte extends Ente implements FlugFähig , QuakFähig {

    public function anzeigen(){
        echo 'Ich bin eine Stockente';
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
