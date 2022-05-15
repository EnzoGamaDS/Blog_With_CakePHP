<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Shippers Controller
 *
 * @property \App\Model\Table\ShippersTable $Shippers
 * @method \App\Model\Entity\Shipper[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ShippersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $shippers = $this->paginate($this->Shippers);

        $this->set(compact('shippers'));
    }

    /**
     * View method
     *
     * @param string|null $id Shipper id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shipper = $this->Shippers->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('shipper'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shipper = $this->Shippers->newEmptyEntity();
        if ($this->request->is('post')) {
            $shipper = $this->Shippers->patchEntity($shipper, $this->request->getData());
            if ($this->Shippers->save($shipper)) {
                $this->Flash->success(__('The shipper has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shipper could not be saved. Please, try again.'));
        }
        $this->set(compact('shipper'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Shipper id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shipper = $this->Shippers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shipper = $this->Shippers->patchEntity($shipper, $this->request->getData());
            if ($this->Shippers->save($shipper)) {
                $this->Flash->success(__('The shipper has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shipper could not be saved. Please, try again.'));
        }
        $this->set(compact('shipper'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Shipper id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shipper = $this->Shippers->get($id);
        if ($this->Shippers->delete($shipper)) {
            $this->Flash->success(__('The shipper has been deleted.'));
        } else {
            $this->Flash->error(__('The shipper could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function search ()
    {
        $shipper = $this->Shippers->get(2);
        $this->set('shipper',$shipper);
        //$this->set(compact($shipper));
    }
}
