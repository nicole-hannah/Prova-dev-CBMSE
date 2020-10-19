<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;


class Pessoa extends Entity
{

    protected $_accessible = [
        'nome' => true,
        'sobrenome' => true,
        'contato_pessoa' => true
    ];
}
