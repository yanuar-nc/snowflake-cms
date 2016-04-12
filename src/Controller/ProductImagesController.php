<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Exception\NotFoundException;
// use App\Error\AppError;
/**
 * ProductImages Controller
 *
 * @property \App\Model\Table\ProductImagesTable $ProductImages
 */
class ProductImagesController extends AppController
{

    public function initialize()
    {
        parent::initialize();

        $this->model_name   = 'ProductImages';
        $this->module_title = 'Product Images';
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products']
        ];
        $productImages = $this->paginate($this->ProductImages);

        $this->set(compact('productImages'));
        $this->set('_serialize', ['productImages']);
    }

    /**
     * View method
     *
     * @param string|null $id Product Image id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productImage = $this->ProductImages->get($id, [
            'contain' => ['Products']
        ]);
        $this->set('productImage', $productImage);
        $this->set('_serialize', ['productImage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add( $id = null )
    {

        $this->Repository->checkId( 'Products', $id );

        $data = $this->ProductImages->newEntity();

        $this->request->data[ 'product_id' ] = $id;

        if ($this->request->is('post')) {
            $data = $this->ProductImages->patchEntity($data, $this->request->data);
            if ($this->ProductImages->save($data)) {
                $this->Flash->success(__('The product image has been saved.'));
                return $this->redirect([ 'controller' => 'products', 'action' => 'view', $id]);
            } else {
                $this->Flash->error(__('The product image could not be saved. Please, try again.'));
            }
        }
        // $products = $this->ProductImages->Products->find('list', ['limit' => 200]);
        $this->set(compact('data'));
        $this->set('_serialize', ['data']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Image id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $data = $this->ProductImages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->ProductImages->patchEntity($data, $this->request->data);
            if ($this->ProductImages->save($data)) {
                $this->Flash->success(__('The product image has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product image could not be saved. Please, try again.'));
            }
        }
        $products = $this->ProductImages->Products->find('list', ['limit' => 200]);
        $this->set(compact('data', 'products'));
        $this->set('_serialize', ['data']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Image id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productImage = $this->ProductImages->get($id);
        if ($this->ProductImages->delete($productImage)) {
            $this->Flash->success(__('The product image has been deleted.'));
        } else {
            $this->Flash->error(__('The product image could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
