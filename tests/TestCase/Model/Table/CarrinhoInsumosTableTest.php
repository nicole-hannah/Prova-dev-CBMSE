<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarrinhoInsumosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarrinhoInsumosTable Test Case
 */
class CarrinhoInsumosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CarrinhoInsumosTable
     */
    public $CarrinhoInsumos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CarrinhoInsumos',
        'app.Carrinhos',
        'app.Insumos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CarrinhoInsumos') ? [] : ['className' => CarrinhoInsumosTable::class];
        $this->CarrinhoInsumos = TableRegistry::getTableLocator()->get('CarrinhoInsumos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CarrinhoInsumos);

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
