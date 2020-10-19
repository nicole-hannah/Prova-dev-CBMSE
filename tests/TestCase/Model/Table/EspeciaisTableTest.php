<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EspeciaisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EspeciaisTable Test Case
 */
class EspeciaisTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EspeciaisTable
     */
    public $Especiais;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Especiais'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Especiais') ? [] : ['className' => EspeciaisTable::class];
        $this->Especiais = TableRegistry::getTableLocator()->get('Especiais', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Especiais);

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
