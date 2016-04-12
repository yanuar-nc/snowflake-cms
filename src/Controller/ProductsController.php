<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 */
class ProductsController extends AppController
{

    public function initialize()
    {
        parent::initialize();

        $this->model_name   = 'Products';
        $this->module_title = 'Products';
        $this->module_icon  = 'fa fa-qrcode';

    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => [
                'Users' => [ 'fields' => [ 'id', 'username' ] ], 
                'ProductCategories' => [ 'fields' => [ 'id', 'name' ] ], 
                'ProductImages' => [ 'fields' => [ 'product_id', 'image' ] ]
            ]
        ];
        $this->set('products', $this->paginate($this->Products));
        $this->set('_serialize', ['products']);
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => [
                'Users' => [ 
                    'fields' => [ 'username', 'display_name', 'id' ], 
                ],
                'ProductCategories' => [ 
                    'fields' => [ 'id', 'name' ]
                ],
                'ProductImages'
            ]
        ]);
        $this->set('data', $product);
        $this->set('_serialize', ['data']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $data = $this->Products->newEntity();
        if ($this->request->is('post')) {
            $this->request->data[ 'user_id' ] = $this->auth_id;
            $data = $this->Products->newEntity($this->request->data, [ 'associated' => [ 'ProductImages' ] ] );
            if ($this->Products->save($data)) {
                $this->Flash->success(__('The data has been saved.'));
                // return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The data could not be saved. Please, try again.'));
            }
        }
        $productCategories = $this->Products->ProductCategories->find('list', ['limit' => 200]);
        $this->set(compact('data', 'productCategories'));
        $this->set('_serialize', ['data']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $data = $this->Products->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->Products->patchEntity($data, $this->request->data);
            if ($this->Products->save($data)) {
                $this->Flash->success(__('The product has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product could not be saved. Please, try again.'));
            }
        }
        $users = $this->Products->Users->find('list', ['limit' => 200]);
        $productCategories = $this->Products->ProductCategories->find('list', ['limit' => 200]);
        $this->set(compact('data', 'users', 'productCategories'));
        $this->set('_serialize', ['product']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
