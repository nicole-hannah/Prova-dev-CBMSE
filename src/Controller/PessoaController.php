<?php
namespace App\Controller;

use App\Controller\AppController;


class PessoaController extends AppController
{
    public function adicionarPessoa(){
        $pessoa = $this->Pessoa->newEntity();
        if ($this->request->is('post')) {
            $pessoa = $this->Pessoa->patchEntity($pessoa, $this->request->getData());
            if ($this->Pessoa->save($pessoa)) {
                $this->Flash->contatoSucesso('Contato Adicionado!', ['key' => 'return']);
                return $this->redirect('/');
            }
            $this->Flash->contatoErro('Falha ao adicionar o contato!', ['key' => 'return']);
        }
    }

    public function editarPessoa($id){
        $pessoa = $this->Pessoa->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pessoa = $this->Pessoa->patchEntity($pessoa, $this->request->getData());
            if ($this->Pessoa->save($pessoa)) {
                $this->Flash->contatoSucesso('Contato Editado!', ['key' => 'return']);
                return $this->redirect('/');
            }
            $this->Flash->contatoErro('Falha ao editar o contato!', ['key' => 'return']);
        }
        $this->set(compact('pessoa'));
    }

    public function deletar($id){

        $pessoa = $this->Pessoa->get($id);
        if ($this->Pessoa->delete($pessoa)) {
            $this->Flash->contatoSucesso('Apagado com sucesso!', ['key' => 'return']);
        } else {
            $this->Flash->contatoErro('Falha ao deletar!', ['key' => 'return']);
        }

        return $this->redirect('/');
    }

}
