<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Supplier Entity
 *
 * @property int $SupplierID
 * @property string|null $SupplierName
 * @property string|null $ContactName
 * @property string|null $Address
 * @property string|null $City
 * @property string|null $PostalCode
 * @property string|null $Country
 * @property string|null $Phone
 */
class Supplier extends Entity
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
        'SupplierName' => true,
        'ContactName' => true,
        'Address' => true,
        'City' => true,
        'PostalCode' => true,
        'Country' => true,
        'Phone' => true,
    ];
}
