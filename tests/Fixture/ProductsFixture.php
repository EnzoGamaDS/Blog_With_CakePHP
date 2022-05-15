<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductsFixture
 */
class ProductsFixture extends TestFixture
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
                'ProductID' => 1,
                'ProductName' => 'Lorem ipsum dolor sit amet',
                'SupplierID' => 1,
                'CategoryID' => 1,
                'Unit' => 'Lorem ipsum dolor sit amet',
                'Price' => 1.5,
            ],
        ];
        parent::init();
    }
}
