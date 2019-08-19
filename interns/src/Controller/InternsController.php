<?php
namespace App\Controller;

use App\Controller\AppController;

class InternsController extends AppController {
    public function index() {
        $this->set('defaultCss', false);

        $interns = $this->paginate($this->Interns);

        $this->set(compact('interns'));
    }
    public function view($id = null) {
        $this->set('defaultCss', false);
        $intern = $this->Interns->get($id, [
            'contain' => []
        ]);
        $this->set('intern', $intern);
    }
    public function add() {
        $intern = $this->Interns->newEntity();
        if ($this->request->is('post')) {
            $intern = $this->Interns->patchEntity(
                $intern, $this->request->getData()
            );
            if ($this->Interns->save($intern)) {
                $this->Flash->success(
                    __('The intern has been saved.')
                );

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Data save faliure'));
        }
        $this->set(compact('intern'));
    }
    public function edit($id = null) {
        $intern = $this->Interns->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $intern = $this->Interns->patchEntity(
                $intern, $this->request->getData()
            );
            if ($this->Interns->save($intern)) {
                $this->Flash->success(
                    __('The intern has been saved.')
                );

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Saving falire'));
        }
        $this->set(compact('intern'));
    }

    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $intern = $this->Interns->get($id);
        if ($this->Interns->delete($intern)) {
            $this->Flash->success(
                __('The intern has been deleted.')
            );
        } else {
            $this->Flash->error(__('Delete falire'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
