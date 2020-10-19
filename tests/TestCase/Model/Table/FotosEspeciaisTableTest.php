<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FotosEspeciaisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FotosEspeciaisTable Test Case
 */
class FotosEspeciaisTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FotosEspeciaisTable
     */
    public $FotosEspeciais;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.FotosEspeciais',
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
        $config = TableRegistry::getTableLocator()->exists('FotosEspeciais') ? [] : ['className' => FotosEspeciaisTable::class];
        $this->FotosEspeciais = TableRegistry::getTableLocator()->get('FotosEspeciais', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FotosEspeciais);

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
