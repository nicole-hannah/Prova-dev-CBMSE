<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DicasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DicasTable Test Case
 */
class DicasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DicasTable
     */
    public $Dicas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Dicas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Dicas') ? [] : ['className' => DicasTable::class];
        $this->Dicas = TableRegistry::getTableLocator()->get('Dicas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Dicas);

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
