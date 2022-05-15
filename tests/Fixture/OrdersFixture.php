<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrdersFixture
 */
class OrdersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'OrderID' => 1,
                'CustomerID' => 1,
                'EmployeeID' => 1,
                'OrderDate' => '2022-05-15',
                'ShipperID' => 1,
            ],
        ];
        parent::init();
    }
}
