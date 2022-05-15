<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrderdetailsFixture
 */
class OrderdetailsFixture extends TestFixture
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
                'OrderDetailID' => 1,
                'OrderID' => 1,
                'ProductID' => 1,
                'Quantity' => 1,
            ],
        ];
        parent::init();
    }
}
