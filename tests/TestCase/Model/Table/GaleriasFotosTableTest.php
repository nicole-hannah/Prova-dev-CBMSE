<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GaleriasFotosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GaleriasFotosTable Test Case
 */
class GaleriasFotosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GaleriasFotosTable
     */
    public $GaleriasFotos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.GaleriasFotos',
        'app.GaleriasCategorias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GaleriasFotos') ? [] : ['className' => GaleriasFotosTable::class];
        $this->GaleriasFotos = TableRegistry::getTableLocator()->get('GaleriasFotos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GaleriasFotos);

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
