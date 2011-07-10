<?php
class RepositoryController extends Controller {
    public function add() {
        $repository = Table::factory('Repositories')->findByUrl($this->request->getVar('repository'));
        if ($repository) {
            // bummer, already exists
            die('repo exists');
        }

        // add to repo table
        // add to repo queue
    }
}
