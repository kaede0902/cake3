<?php
namespace App\Controller;
use App\Controller\AppController;

class ArticlesController extends AppController {
    public function initialize() {
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->loadComponent('Flash');
    }
    public function index() {
        $articles = $this->Paginator->paginate($this->Articles->find());
        $this->set(compact('articles'));
    }
    public function edit() {
        $article = $this->Articles->findBySlug($slug)->firstOrFail();
        if ($this->request->is(['post', 'put'])) {
            $this->Articles->patchEntity($article, $this->request->getData());
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('Your article has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your article.'));
        }
        $this->set('article', $article);
    }
    public function view($slug = null) {
        $article = $this->Articles->findBySlug($slug)->firstOrFail();
        $this->set(compact('article'));
    }
    public function add() {
        $article = $this->Articles->newEntity();
        if ($this->request->is('post')) {
            $article = $this->Articles->patchEntity(
                $article, $this->request->getData()
            );
            $article->user_id = 1;

            if($this->Articles->save($article)) {
               $this->Flash->success(__('The article saved.'));
               return $this->redirect(['action'=>'index']);
            }
        }
        $this->set(compact('article'));
    }

}

