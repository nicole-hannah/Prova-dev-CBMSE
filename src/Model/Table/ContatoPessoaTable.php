<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class ContatoPessoaTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('contato_pessoa');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

     $this->belongsTo('Pessoa', [
            'foreignKey' => 'pessoa_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TipoContato', [
            'foreignKey' => 'tipo_contato_id',
            'joinType' => 'INNER'
        ]);
    }


    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('contato')
            ->maxLength('contato', 50)
            ->requirePresence('contato', 'create')
            ->allowEmptyString('contato', false);

        return $validator;
    }


    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['pessoa_id'], 'Pessoa'));
        $rules->add($rules->existsIn(['tipo_contato_id'], 'TipoContato'));

        return $rules;
    }
}
