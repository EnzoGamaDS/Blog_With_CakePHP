<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Orderdetails Controller
 *
 * @property \App\Model\Table\OrderdetailsTable $Orderdetails
 * @method \App\Model\Entity\Orderdetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrderdetailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $orderdetails = $this->paginate($this->Orderdetails);

        $this->set(compact('orderdetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Orderdetail id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orderdetail = $this->Orderdetails->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('orderdetail'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orderdetail = $this->Orderdetails->newEmptyEntity();
        if ($this->request->is('post')) {
            $orderdetail = $this->Orderdetails->patchEntity($orderdetail, $this->request->getData());
            if ($this->Orderdetails->save($orderdetail)) {
                $this->Flash->success(__('The orderdetail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orderdetail could not be saved. Please, try again.'));
        }
        $this->set(compact('orderdetail'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Orderdetail id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orderdetail = $this->Orderdetails->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orderdetail = $this->Orderdetails->patchEntity($orderdetail, $this->request->getData());
            if ($this->Orderdetails->save($orderdetail)) {
                $this->Flash->success(__('The orderdetail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orderdetail could not be saved. Please, try again.'));
        }
        $this->set(compact('orderdetail'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Orderdetail id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orderdetail = $this->Orderdetails->get($id);
        if ($this->Orderdetails->delete($orderdetail)) {
            $this->Flash->success(__('The orderdetail has been deleted.'));
        } else {
            $this->Flash->error(__('The orderdetail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
