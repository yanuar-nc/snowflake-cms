<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductCategories Controller
 *
 * @property \App\Model\Table\ProductCategoriesTable $ProductCategories
 */
class ProductCategoriesController extends AppController
{

    public $paginate = [ 
        'limit' => 25,
    ];

    public function initialize()
    {
        parent::initialize();

        $this->model_name   = 'ProductCategories';
        $this->module_title = 'Product Category';
        $this->module_icon  = 'fa fa-user';

    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ParentProductCategories']
        ];
        $this->set('productCategories', $this->paginate($this->ProductCategories));
        $this->set('_serialize', ['productCategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Product Category id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productCategory = $this->ProductCategories->get($id, [
            'contain' => ['ParentProductCategories', 'ChildProductCategories', 'Products']
        ]);
        $this->set('productCategory', $productCategory);
        $this->set('_serialize', ['productCategory']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $data = $this->ProductCategories->newEntity();
        if ($this->request->is('post')) {

            $this->request->data[ 'row_status' ] = 1;
            $data = $this->ProductCategories->patchEntity($data, $this->request->data);
            
            if ($this->ProductCategories->save($data)) {
                $this->Flash->success(__('The product category has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product category could not be saved. Please, try again.'));
            }

        }
        $parentProductCategories = $this->ProductCategories->ParentProductCategories->find('treeList', ['limit' => 200, 'spacer' => ' --- ']);
        $this->set(compact('data', 'parentProductCategories'));
        $this->set('_serialize', ['data']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Category id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $data = $this->ProductCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->ProductCategories->patchEntity($data, $this->request->data);
            if ($this->ProductCategories->save($data)) {
                $this->Flash->success(__('The product category has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product category could not be saved. Please, try again.'));
            }
        }
        $parentProductCategories = $this->ProductCategories->ParentProductCategories->find('list', ['limit' => 200]);
        $this->set(compact('data', 'parentProductCategories'));
        $this->set('_serialize', ['data']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Category id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productCategory = $this->ProductCategories->get($id);
        if ($this->ProductCategories->delete($productCategory)) {
            $this->Flash->success(__('The product category has been deleted.'));
        } else {
            $this->Flash->error(__('The product category could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
