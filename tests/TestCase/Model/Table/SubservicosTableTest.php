<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubservicosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubservicosTable Test Case
 */
class SubservicosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SubservicosTable
     */
    public $Subservicos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Subservicos',
        'app.Servicos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Subservicos') ? [] : ['className' => SubservicosTable::class];
        $this->Subservicos = TableRegistry::getTableLocator()->get('Subservicos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Subservicos);

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
