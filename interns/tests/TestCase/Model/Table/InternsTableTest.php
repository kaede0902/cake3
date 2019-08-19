<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InternsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InternsTable Test Case
 */
class InternsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InternsTable
     */
    public $Interns;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Interns'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Interns') ? [] : ['className' => InternsTable::class];
        $this->Interns = TableRegistry::getTableLocator()->get('Interns', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Interns);

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
