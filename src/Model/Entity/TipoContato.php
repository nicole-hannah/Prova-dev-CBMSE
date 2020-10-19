<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;


class TipoContato extends Entity
{

    protected $_accessible = [
        'nome' => true,
        'contato_pessoa' => true
    ];
}
