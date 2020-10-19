<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GaleriasCategoriasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GaleriasCategoriasTable Test Case
 */
class GaleriasCategoriasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GaleriasCategoriasTable
     */
    public $GaleriasCategorias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('GaleriasCategorias') ? [] : ['className' => GaleriasCategoriasTable::class];
        $this->GaleriasCategorias = TableRegistry::getTableLocator()->get('GaleriasCategorias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GaleriasCategorias);

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
