<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ShippersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ShippersTable Test Case
 */
class ShippersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ShippersTable
     */
    protected $Shippers;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Shippers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Shippers') ? [] : ['className' => ShippersTable::class];
        $this->Shippers = $this->getTableLocator()->get('Shippers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Shippers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ShippersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
