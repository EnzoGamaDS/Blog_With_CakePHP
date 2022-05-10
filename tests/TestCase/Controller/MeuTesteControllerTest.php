<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\MeuTesteController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\MeuTesteController Test Case
 *
 * @uses \App\Controller\MeuTesteController
 */
class MeuTesteControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.MeuTeste',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\MeuTesteController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
