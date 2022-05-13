<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\Entity\Supplier;
use Cake\ORM\TableRegistry;

/**
 * MeuTeste Controller
 *
 * @method \App\Model\Entity\MeuTeste[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MeuTesteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->autoRender = false;
        $this->loadModel('Shippers');
        $shippers = $this->Shippers->find('all')
        ->toArray();
        debug($shippers);
    }

    public function view($id = null){
        $this->autoRender = false;
        $this->loadModel('Shippers');
        $shippers = $this->Shippers->get($id);
        debug($id);
    }
    public function add(){
        $this->autoRender = false;
        $tableShippers = TableRegistry::get('Shippers');
        $queryString = $this->request->getQuery();

        $shippers = $tableShippers->newEntity();
        $shippers->ShipperName = $queryString(['ShipperName']);
        $shippers->Phone = $queryString(['Phone']);

        debug($queryString);
    }
}
