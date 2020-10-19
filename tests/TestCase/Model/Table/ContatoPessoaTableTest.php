<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContatoPessoaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContatoPessoaTable Test Case
 */
class ContatoPessoaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContatoPessoaTable
     */
    public $ContatoPessoa;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ContatoPessoa',
        'app.Pessoa',
        'app.TipoContato'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ContatoPessoa') ? [] : ['className' => ContatoPessoaTable::class];
        $this->ContatoPessoa = TableRegistry::getTableLocator()->get('ContatoPessoa', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ContatoPessoa);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
