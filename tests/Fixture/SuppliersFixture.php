<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SuppliersFixture
 */
class SuppliersFixture extends TestFixture
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
                'SupplierID' => 1,
                'SupplierName' => 'Lorem ipsum dolor sit amet',
                'ContactName' => 'Lorem ipsum dolor sit amet',
                'Address' => 'Lorem ipsum dolor sit amet',
                'City' => 'Lorem ipsum dolor sit amet',
                'PostalCode' => 'Lorem ipsum dolor sit amet',
                'Country' => 'Lorem ipsum dolor sit amet',
                'Phone' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
