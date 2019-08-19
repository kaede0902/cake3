<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Interns Controller
 *
 * @property \App\Model\Table\InternsTable $Interns
 *
 * @method \App\Model\Entity\Intern[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InternsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $interns = $this->paginate($this->Interns);

        $this->set(compact('interns'));
    }

    /**
     * View method
     *
     * @param string|null $id Intern id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $intern = $this->Interns->get($id, [
            'contain' => []
        ]);

        $this->set('intern', $intern);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $intern = $this->Interns->newEntity();
        if ($this->request->is('post')) {
            $intern = $this->Interns->patchEntity($intern, $this->request->getData());
            if ($this->Interns->save($intern)) {
                $this->Flash->success(__('The intern has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The intern could not be saved. Please, try again.'));
        }
        $this->set(compact('intern'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Intern id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $intern = $this->Interns->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $intern = $this->Interns->patchEntity($intern, $this->request->getData());
            if ($this->Interns->save($intern)) {
                $this->Flash->success(__('The intern has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The intern could not be saved. Please, try again.'));
        }
        $this->set(compact('intern'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Intern id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $intern = $this->Interns->get($id);
        if ($this->Interns->delete($intern)) {
            $this->Flash->success(__('The intern has been deleted.'));
        } else {
            $this->Flash->error(__('The intern could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
