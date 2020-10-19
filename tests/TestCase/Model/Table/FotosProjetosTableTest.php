<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FotosProjetosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FotosProjetosTable Test Case
 */
class FotosProjetosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FotosProjetosTable
     */
    public $FotosProjetos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.FotosProjetos',
        'app.Projetos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FotosProjetos') ? [] : ['className' => FotosProjetosTable::class];
        $this->FotosProjetos = TableRegistry::getTableLocator()->get('FotosProjetos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FotosProjetos);

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
