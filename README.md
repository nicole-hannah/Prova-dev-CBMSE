

# Prova CMBSE - Criação de uma agenda.


Aplicação feita com [CakePHP](https://cakephp.org) 3.x.


## Instalação

Antes de começar, você precisa ter o composer instalado, caso não tenha, segue o link:
1. Download [Composer](https://getcomposer.org/doc/00-intro.md) ou atualize-o `composer self-update`.

Com o composer instalado ou atualizado com sucesso, execute o comando abaixo na pasta do projeto.

```bash
composer install
```

Feito isso, vamos abrir a pasta do projeto na IDE de sua preferência, e vamos apontar o banco de dados.
Em config/app.php, na seção 'Datasources':
```bash

 'Datasources' => [
        'default' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Mysql',
            'persistent' => false,
            'host' => 'localhost',
            'port' => '8889',
            'username' => 'SEU_USUARIO',
            'password' => 'SUA_SENHA',
            'database' => 'NOME_DO_BANCO',
            'timezone' => 'UTC',
            'flags' => [],
            'cacheMetadata' => true,
            'log' => false,
            'quoteIdentifiers' => false,
            'url' => env('DATABASE_URL', null),
        ],
   ],
```
Editar os campos 'username', 'password', 'database'.

Com o banco configurado, vamos rodar a aplicação. No terminal, na pasta do projeto execute o comando:
```bash
bin/cake server -p 8765
```

E entre em `http://localhost:8765` para ver a aplicação funcionar.

