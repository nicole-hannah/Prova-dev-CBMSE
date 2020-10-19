<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoContatoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoContatoTable Test Case
 */
class TipoContatoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoContatoTable
     */
    public $TipoContato;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TipoContato',
        'app.ContatoPessoa'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TipoContato') ? [] : ['className' => TipoContatoTable::class];
        $this->TipoContato = TableRegistry::getTableLocator()->get('TipoContato', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TipoContato);

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
}
