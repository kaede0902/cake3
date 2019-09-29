<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LedgesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LedgesTable Test Case
 */
class LedgesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LedgesTable
     */
    public $Ledges;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Ledges',
        'app.Staffs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Ledges') ? [] : ['className' => LedgesTable::class];
        $this->Ledges = TableRegistry::getTableLocator()->get('Ledges', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ledges);

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
