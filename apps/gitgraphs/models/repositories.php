<?php
class Repository extends Object {
    protected $table_name = 'Repositories';
    protected $table = 'repositories';
}

class Repositories extends Table {
    protected $object_name = 'Repository';
    protected $table = 'repositories';
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
