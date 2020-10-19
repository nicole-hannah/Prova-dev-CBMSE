<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class ContatoPessoa extends Entity
{

    protected $_accessible = [
        'contato' => true,
        'pessoa_id' => true,
        'tipo_contato_id' => true,
        'pessoa' => true,
        'tipo_contato' => true
    ];
}
