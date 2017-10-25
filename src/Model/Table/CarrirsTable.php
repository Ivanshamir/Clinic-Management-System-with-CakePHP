<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Carrirs Model
 *
 * @property \App\Model\Table\PatientsTable|\Cake\ORM\Association\HasMany $Patients
 *
 * @method \App\Model\Entity\Carrir get($primaryKey, $options = [])
 * @method \App\Model\Entity\Carrir newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Carrir[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Carrir|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Carrir patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Carrir[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Carrir findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CarrirsTable extends Table
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

        $this->setTable('carrirs');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Patients', [
            'foreignKey' => 'carrir_id'
        ]);
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
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('carrir_code')
            ->requirePresence('carrir_code', 'create')
            ->notEmpty('carrir_code');

        return $validator;
    }
}
