<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class PessoaTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('pessoa');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

      $this->hasMany('ContatoPessoa', [
            'foreignKey' => 'pessoa_id',
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 50)
            ->requirePresence('nome', 'create')
            ->allowEmptyString('nome', false);

        $validator
            ->scalar('sobrenome')
            ->maxLength('sobrenome', 50)
            ->requirePresence('sobrenome', 'create')
            ->allowEmptyString('sobrenome', false);


        return $validator;
    }
}
