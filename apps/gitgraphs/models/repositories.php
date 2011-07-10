<?php
class Repository extends Object {
    //
}

class Repositories extends Table {
    protected $meta = array(
        "columns" => array(
            "url" => array(
                "type" => "text",
            ),
        ),
    );

    public function findByUrl($url) {
        return $this->find(array(
            "url" => $url,
        ));
    }
}
