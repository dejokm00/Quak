<?php

class GummiEnte extends Ente implements QuakFähig {

    public function quaken(){
        echo '*quietsch* *quietsch*';
    }

    public function anzeigen(){
        echo 'Ich bin eine GummiEnte';
    }
}
