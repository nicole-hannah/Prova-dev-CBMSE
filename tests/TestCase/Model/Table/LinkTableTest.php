<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LinkTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LinkTable Test Case
 */
class LinkTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LinkTable
     */
    public $Link;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Link'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Link') ? [] : ['className' => LinkTable::class];
        $this->Link = TableRegistry::getTableLocator()->get('Link', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Link);

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
