<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarrirsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarrirsTable Test Case
 */
class CarrirsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CarrirsTable
     */
    public $Carrirs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.carrirs',
        'app.patients',
        'app.appointments',
        'app.invoices'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Carrirs') ? [] : ['className' => CarrirsTable::class];
        $this->Carrirs = TableRegistry::get('Carrirs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Carrirs);

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
