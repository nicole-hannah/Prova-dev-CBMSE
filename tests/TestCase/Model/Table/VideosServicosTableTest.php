<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VideosServicosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VideosServicosTable Test Case
 */
class VideosServicosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VideosServicosTable
     */
    public $VideosServicos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.VideosServicos',
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
        $config = TableRegistry::getTableLocator()->exists('VideosServicos') ? [] : ['className' => VideosServicosTable::class];
        $this->VideosServicos = TableRegistry::getTableLocator()->get('VideosServicos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VideosServicos);

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
