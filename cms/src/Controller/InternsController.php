<?php
namespace App\Controller;

use App\Controller\AppController;

class InternsController extends AppController {
    public function index() {
        debug($this->Interns);
        exit;
        $this->loadComponent('Paginator');
        $articles = $this->Paginator->paginate(
            $this->Articles->find());
        $this->set(compact('articles'));
    }
}
