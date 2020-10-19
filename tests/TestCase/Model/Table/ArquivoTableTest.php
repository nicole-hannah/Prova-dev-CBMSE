<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArquivoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArquivoTable Test Case
 */
class ArquivoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ArquivoTable
     */
    public $Arquivo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Arquivo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Arquivo') ? [] : ['className' => ArquivoTable::class];
        $this->Arquivo = TableRegistry::getTableLocator()->get('Arquivo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Arquivo);

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
