<?php
namespace App\Controller;

use App\Controller\AppController;

class InternsController extends AppController {
    public function index() {
        $this->loadComponent('Paginator');
        $interns = $this->Paginator->paginate(
            $this->Interns->find());

        $this->set(compact('interns'));
    }
}
