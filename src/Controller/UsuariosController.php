<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table\EstadosTable;

/**
 * Usuarios Controller
 *
 * @property \App\Model\Table\UsuariosTable $Usuarios
 * @property \App\Model\Table\EstadosTable $Estados
 *
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsuariosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $usuarios = $this->paginate($this->Usuarios, [
            'contain' => ['Estados','Cidades']
        ]);

        $this->set(compact('usuarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuario = $this->Usuarios->get($id, [
            'contain' => ['Estados','Cidades']
        ]);

        $this->set('usuario', $usuario);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usuario = $this->Usuarios->newEntity();
        $estados = $this->loadModel('Estados')->find('list');
        $cidades = $this->loadModel('Cidades')->find('list')->where(['id_estado =' => 1]);

        if ($this->request->is('post')) {
            
            $dados              = $this->request->getData();
            $dados['cpf']       = str_replace(array('-','.'), '', $dados['cpf']);
            $dados['telefone']  = str_replace(array('(',')','-',' '), '', $dados['telefone']);
            $usuario            = $this->Usuarios->patchEntity($usuario, $dados);
            
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('The usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('usuario', 'estados', 'cidades'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuario = $this->Usuarios->get($id, [
            'contain' => []
        ]);

        $estados = $this->loadModel('Estados')->find('list');
        $cidades = $this->loadModel('Cidades')->find('list')->where(['id_estado =' => $usuario['id_estado']]);

        if ($this->request->is(['patch', 'post', 'put'])) {

            $dados              = $this->request->getData();
            $dados['cpf']       = str_replace(array('-','.'), '', $dados['cpf']);
            $dados['telefone']  = str_replace(array('(',')','-',' '), '', $dados['telefone']);
            $usuario            = $this->Usuarios->patchEntity($usuario, $dados);

            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('The usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('usuario', 'estados', 'cidades'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuario = $this->Usuarios->get($id);
        if ($this->Usuarios->delete($usuario)) {
            $this->Flash->success(__('The usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
