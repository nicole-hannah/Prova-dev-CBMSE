<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PacotesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PacotesTable Test Case
 */
class PacotesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PacotesTable
     */
    public $Pacotes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Pacotes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Pacotes') ? [] : ['className' => PacotesTable::class];
        $this->Pacotes = TableRegistry::getTableLocator()->get('Pacotes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pacotes);

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
