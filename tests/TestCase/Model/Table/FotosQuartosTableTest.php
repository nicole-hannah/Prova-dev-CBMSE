<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FotosQuartosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FotosQuartosTable Test Case
 */
class FotosQuartosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FotosQuartosTable
     */
    public $FotosQuartos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.FotosQuartos',
        'app.Quartos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FotosQuartos') ? [] : ['className' => FotosQuartosTable::class];
        $this->FotosQuartos = TableRegistry::getTableLocator()->get('FotosQuartos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FotosQuartos);

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
