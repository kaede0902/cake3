<?php
namespace App\Controller;

use App\Controller\AppController;

class LedgersController extends AppController {
    public $paginate = ['limit'=>6];
    public function index(){
        $this->layout = false;
        $ledgers = $this->paginate($this->Ledgers);
        $this->set('defaultCss', false);
        $this->set(compact('ledgers'));
    }
    public function view($id = null) {
        $ledger = $this->Ledgers->get($id);
        $this->set('ledger', $ledger);
    }
    public function add() {
        $this->layout = false;
        $this->set('defaultCss', false);
        $ledger = $this->Ledgers->newEntity();
        if ($this->request->is('post')) {
            $ledger = $this->Ledgers->patchEntity(
                $ledger, $this->request->getData());
            if ($this->Ledgers->save($ledger)) {
                $this->Flash->success(
                    __('The ledger has been saved.'));

                return $this->redirect(
                    ['action' => 'index']);
            }
            $this->Flash->error(
                __('The ledger could not be saved.'));
        }
        $this->set(compact('ledger'));
    }

    public function edit($id = null) {
        // return the GET data (in url)
        $ledger = $this->Ledgers->get($id);

        // this is POST only -------------
        if ($this->request->is(['patch', 'post', 'put'])) {

            $ledger = $this->Ledgers->patchEntity(
                $ledger, $this->request->getData());
            if ($this->Ledgers->save($ledger)) {
                $this->Flash->success(
                    __('The ledger has been saved.'));

                return $this->redirect(
                    ['action' => 'index']);
            }
            $this->Flash->error(
                __('The ledger could not be saved.'));
        }
        $this->set(compact('ledger'));
    }

    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $ledger = $this->Ledgers->get($id);
        if ($this->Ledgers->delete($ledger)) {
            $this->Flash->success(
                __('The ledger has been deleted.'));
        } else {
            $this->Flash->error(
                __('The ledger could not be deleted. '));
        }

        return $this->redirect(['action' => 'index']);
    }
}
