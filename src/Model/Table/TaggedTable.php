<?php
namespace App\Model\Table;

use App\Model\Entity\Tagged;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tagged Model
 */
class TaggedTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('tagged');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Tags', [
            'foreignKey' => 'tag_id'
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
            ->allowEmpty('id', 'create')
            ->requirePresence('foreign_key', 'create')
            ->notEmpty('foreign_key')
            ->requirePresence('tag_id', 'create')
            ->notEmpty('tag_id')
            ->requirePresence('model', 'create')
            ->notEmpty('model')
            ->allowEmpty('language')
            ->add('times_tagged', 'valid', ['rule' => 'numeric'])
            ->requirePresence('times_tagged', 'create')
            ->notEmpty('times_tagged');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['tag_id'], 'Tags'));
        return $rules;
    }
}
