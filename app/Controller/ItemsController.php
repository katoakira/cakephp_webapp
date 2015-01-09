<?php 
    class ItemsController extends AppController {
        public $helpers = array('Html', 'Form');
        
        public function beforeRender() {
        //    $this->set('items', $this->Item->find('all'));
        }
       
         public function index() {
            $this->set('items', $this->Item->find('all'));
         }

        public function view($id = null) {
            if(!$id) {
             throw new NotFoundException(__('無効な投稿'));
           }

            $item = $this->Post->findById($id);
            if (!$item) {
                throw new NotFoundException(__('無効な投稿'));
            }
            $this->set('item', $item);
        }

          public function add() {
             if ($this->request->is('post')) {
                 $this->Item->create();
                 if ($this->Item->save($this->request->data)) {
                     $this->Session->setFlash(__('出品しました'));
                     return $this->redirect(array('action' => 'index'));
                 }
                 $this->Session->setFlash(__('出品できません'));
             }
          }

         public function edit($id = null) {
             if (!$id) {
                   throw new NotFoundException(__('無効な投稿'));
             }

             $item = $this->Post->findById($id);
             if (!$item) {
                 throw new NotFoundException(__('無効な投稿'));
             }

             if ($this->request->is(array('post', 'put'))) {
                 $this->Item->id = $id;
                 if ($this->Item->save($this->request->data)) {
                     $this->Session->setFlash(__('修正しました'));
                     return $this->redirect(array('action' => 'index'));
                 }
                      $this->Session->setFlash(__('修正できませせん'));
             }

             if (!$this->request->data) {
                 $this->request->data = $item;
             }  
         }

         public function delete($id) {
             if ($this->request->is('get')) {
                 throw new MethodNotAllowedException();
             }
    
             if ($this->Post->delete($id)) {
                 $this->Session->setFlash(__('削除しました'));
                 return $this->redirect(array('action' => 'index'));
             }
        } 
}






