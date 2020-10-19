<?php
namespace App\Controller;

use App\Controller\AppController;


class ContatoPessoaController extends AppController
{

    public function adicionarContato($id){
        $pessoa = $this->ContatoPessoa->Pessoa->find()->where(['Pessoa.id'=>$id])->first();
        $tipos = $this->ContatoPessoa->TipoContato->find();

        $contatoPessoa = $this->ContatoPessoa->newEntity();

        if ($this->request->is('post')) {
            $contatoExistente = $this->ContatoPessoa->find()
                ->where(['ContatoPessoa.tipo_contato_id'=>$this->request->getData('tipo'),
                    'ContatoPessoa.contato'=>$this->request->getData('contato'),
                    'ContatoPessoa.pessoa_id'=>$id])->first();
            if(!empty($contatoExistente)){

                $this->Flash->contatoErro('Contato já existe!', ['key' => 'return']);
                return $this->redirect('/visualizar-contato/'.$id);

            } else {

                $contatoPessoa->contato = $this->request->getData('contato');
                $contatoPessoa->tipo_contato_id = $this->request->getData('tipo');
                $contatoPessoa->pessoa_id = $id;

                if ($this->ContatoPessoa->save($contatoPessoa)) {
                    $this->Flash->contatoSucesso('Contato Salvo!', ['key' => 'return']);

                    return $this->redirect('/visualizar-contato/' . $id);
                }
                $this->Flash->contatoErro('Falha ao salvar o contato', ['key' => 'return']);
            }
        }

        $this->set(compact('pessoa', 'tipos'));

    }

    public function visualizar($id){
        $pessoa = $this->ContatoPessoa->Pessoa->find()->where(['Pessoa.id'=>$id])->first();
        $tipos = $this->ContatoPessoa->find()
            ->where(['ContatoPessoa.pessoa_id'=>$id])
            ->contain(['TipoContato']);
        $this->set(compact('pessoa', 'tipos'));

    }

    public function editar($id)
    {
        $contato = $this->ContatoPessoa->get($id);
        $tipos = $this->ContatoPessoa->TipoContato->find();
        $pessoa = $this->ContatoPessoa->Pessoa->find()->where(['Pessoa.id'=>$contato->pessoa_id])->first();

        if ($this->request->is('post')) {
            $contatoExistente = $this->ContatoPessoa->find()
                ->where(['ContatoPessoa.tipo_contato_id'=>$this->request->getData('tipo'),
                    'ContatoPessoa.contato'=>$this->request->getData('contato'),
                    'ContatoPessoa.pessoa_id'=>$pessoa->id, 'ContatoPessoa.id !='=>$id])->first();
            if(!empty($contatoExistente)){

                $this->Flash->contatoErro('Contato já existe!', ['key' => 'return']);
                return $this->redirect('/visualizar-contato/'.$pessoa->id);

            }else {
                $contato->contato = $this->request->getData('contato');
                $contato->tipo_contato_id = $this->request->getData('tipo');
                $contato->pessoa_id = $pessoa->id;

                if ($this->ContatoPessoa->save($contato)) {
                    $this->Flash->contatoSucesso('Contato Salvo!', ['key' => 'return']);

                    return $this->redirect('/visualizar-contato/' . $pessoa->id);
                }
                $this->Flash->contatoErro('Falha ao salvar o contato', ['key' => 'return']);
            }
        }

        $this->set(compact('pessoa', 'tipos', 'contato'));
    }
    public function deletar($id){

        $contatoPessoa = $this->ContatoPessoa->get($id);
        $pessoa = $contatoPessoa->pessoa_id;
        if ($this->ContatoPessoa->delete($contatoPessoa)) {
            $this->Flash->contatoSucesso('Apagado com sucesso!', ['key' => 'return']);
        } else {
            $this->Flash->contatoErro('Falha ao apagar!', ['key' => 'return']);
        }

        return $this->redirect('/visualizar-contato/'.$pessoa);

    }

}
