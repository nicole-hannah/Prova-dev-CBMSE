<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarrinhosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarrinhosTable Test Case
 */
class CarrinhosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CarrinhosTable
     */
    public $Carrinhos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Carrinhos',
        'app.Vendedores',
        'app.Usuarios',
        'app.CarrinhoInsumos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Carrinhos') ? [] : ['className' => CarrinhosTable::class];
        $this->Carrinhos = TableRegistry::getTableLocator()->get('Carrinhos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Carrinhos);

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
