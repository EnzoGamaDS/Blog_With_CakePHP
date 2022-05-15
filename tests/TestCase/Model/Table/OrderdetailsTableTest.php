<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrderdetailsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrderdetailsTable Test Case
 */
class OrderdetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrderdetailsTable
     */
    protected $Orderdetails;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Orderdetails',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Orderdetails') ? [] : ['className' => OrderdetailsTable::class];
        $this->Orderdetails = $this->getTableLocator()->get('Orderdetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Orderdetails);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\OrderdetailsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
