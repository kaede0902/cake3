<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ledgers Model
 *
 * @property \App\Model\Table\StaffsTable&\Cake\ORM\Association\BelongsTo $Staffs
 *
 * @method \App\Model\Entity\Ledger get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ledger newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ledger[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ledger|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ledger saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ledger patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ledger[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ledger findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LedgersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('ledgers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('customer_name')
            ->maxLength('customer_name', 64)
            ->requirePresence('customer_name', 'create')
            ->notEmptyString('customer_name');

        $validator
            ->scalar('customer_adress')
            ->requirePresence('customer_adress', 'create')
            ->notEmptyString('customer_adress');

        $validator
            ->scalar('customer_tel1')
            ->maxLength('customer_tel1', 64)
            ->requirePresence('customer_tel1', 'create')
            ->notEmptyString('customer_tel1');

        $validator
            ->scalar('customer_tel2')
            ->maxLength('customer_tel2', 64)
            ->requirePresence('customer_tel2', 'create')
            ->notEmptyString('customer_tel2');

        $validator
            ->scalar('work_category')
            ->maxLength('work_category', 255)
            ->requirePresence('work_category', 'create')
            ->notEmptyString('work_category');

        $validator
            ->scalar('content')
            ->requirePresence('content', 'create')
            ->notEmptyString('content');

        $validator
            ->date('reserved')
            ->requirePresence('reserved', 'create')
            ->notEmptyDate('reserved');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
}
