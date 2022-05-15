<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Orderdetails Model
 *
 * @method \App\Model\Entity\Orderdetail newEmptyEntity()
 * @method \App\Model\Entity\Orderdetail newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Orderdetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Orderdetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\Orderdetail findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Orderdetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Orderdetail[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Orderdetail|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Orderdetail saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Orderdetail[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Orderdetail[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Orderdetail[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Orderdetail[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OrderdetailsTable extends Table
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

        $this->setTable('orderdetails');
        $this->setDisplayField('OrderDetailID');
        $this->setPrimaryKey('OrderDetailID');
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
            ->integer('OrderID')
            ->allowEmptyString('OrderID');

        $validator
            ->integer('ProductID')
            ->allowEmptyString('ProductID');

        $validator
            ->integer('Quantity')
            ->allowEmptyString('Quantity');

        return $validator;
    }
}
