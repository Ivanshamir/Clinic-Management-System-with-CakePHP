<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Carrirs Controller
 *
 * @property \App\Model\Table\CarrirsTable $Carrirs
 *
 * @method \App\Model\Entity\Carrir[] paginate($object = null, array $settings = [])
 */
class CarrirsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $carrirs = $this->paginate($this->Carrirs);

        $this->set(compact('carrirs'));
        $this->set('_serialize', ['carrirs']);
    }

    /**
     * View method
     *
     * @param string|null $id Carrir id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $carrir = $this->Carrirs->get($id, [
            'contain' => ['Patients']
        ]);

        $this->set('carrir', $carrir);
        $this->set('_serialize', ['carrir']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $carrir = $this->Carrirs->newEntity();
        if ($this->request->is('post')) {
            $carrir = $this->Carrirs->patchEntity($carrir, $this->request->getData());
            if ($this->Carrirs->save($carrir)) {
                $this->Flash->success(__('The carrir has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carrir could not be saved. Please, try again.'));
        }
        $this->set(compact('carrir'));
        $this->set('_serialize', ['carrir']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Carrir id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $carrir = $this->Carrirs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $carrir = $this->Carrirs->patchEntity($carrir, $this->request->getData());
            if ($this->Carrirs->save($carrir)) {
                $this->Flash->success(__('The carrir has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carrir could not be saved. Please, try again.'));
        }
        $this->set(compact('carrir'));
        $this->set('_serialize', ['carrir']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Carrir id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $carrir = $this->Carrirs->get($id);
        if ($this->Carrirs->delete($carrir)) {
            $this->Flash->success(__('The carrir has been deleted.'));
        } else {
            $this->Flash->error(__('The carrir could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
