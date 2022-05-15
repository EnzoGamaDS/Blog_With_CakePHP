<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $ProductID
 * @property string|null $ProductName
 * @property int|null $SupplierID
 * @property int|null $CategoryID
 * @property string|null $Unit
 * @property string|null $Price
 */
class Product extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'ProductName' => true,
        'SupplierID' => true,
        'CategoryID' => true,
        'Unit' => true,
        'Price' => true,
    ];
}
