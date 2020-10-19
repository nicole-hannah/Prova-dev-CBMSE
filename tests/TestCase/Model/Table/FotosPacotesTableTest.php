<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FotosPacotesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FotosPacotesTable Test Case
 */
class FotosPacotesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FotosPacotesTable
     */
    public $FotosPacotes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.FotosPacotes',
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
        $config = TableRegistry::getTableLocator()->exists('FotosPacotes') ? [] : ['className' => FotosPacotesTable::class];
        $this->FotosPacotes = TableRegistry::getTableLocator()->get('FotosPacotes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FotosPacotes);

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
