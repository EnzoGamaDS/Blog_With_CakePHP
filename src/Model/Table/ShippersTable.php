<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Shippers Model
 *
 * @method \App\Model\Entity\Shipper newEmptyEntity()
 * @method \App\Model\Entity\Shipper newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Shipper[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Shipper get($primaryKey, $options = [])
 * @method \App\Model\Entity\Shipper findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Shipper patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Shipper[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Shipper|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Shipper saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Shipper[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Shipper[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Shipper[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Shipper[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ShippersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('shippers');
        $this->setDisplayField('ShipperID');
        $this->setPrimaryKey('ShipperID');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('ShipperName')
            ->maxLength('ShipperName', 255)
            ->allowEmptyString('ShipperName');

        $validator
            ->scalar('Phone')
            ->maxLength('Phone', 255)
            ->allowEmptyString('Phone');

        return $validator;
    }
}
