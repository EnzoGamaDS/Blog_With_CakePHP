<?php
declare(strict_types=1);

namespace App\Controller;

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
        //echo "Olá mundo";
        //exit();
        $this->autoRender = false; //Para que o controller não busque um view
        $query = $this->request->acceptLanguage();
        debug($query);
        echo "Ola mundo".$query;
    }
}
