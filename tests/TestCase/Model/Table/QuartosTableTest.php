<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuartosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuartosTable Test Case
 */
class QuartosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\QuartosTable
     */
    public $Quartos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('Quartos') ? [] : ['className' => QuartosTable::class];
        $this->Quartos = TableRegistry::getTableLocator()->get('Quartos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Quartos);

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
