<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cidades Controller
 *
 * @property \App\Model\Table\CidadesTable $Cidades
 *
 * @method \App\Model\Entity\Cidade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CidadesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $cidades = $this->paginate($this->Cidades);

        $this->set(compact('cidades'));
    }

    /**
     * getByEstado method
     *
     * @param string|null $id Cidade id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     * 
     * Busca as cidades pelo id do estadoo
     */
    public function getByEstado($id = null)
    {
        $this->autoRender = false;
        $this->loadComponent('RequestHandler');

        $cidades = $this->Cidades
        ->find()
        ->select(['id_cidade', 'cidade'])
        ->where(['id_estado =' => $id])
        ->toList();
        
        $this->response->type('json');
        $this->response->body(json_encode($cidades));
        return $this->response;
    }

}
