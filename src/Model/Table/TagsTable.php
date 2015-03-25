<?php
namespace App\Model\Table;

use App\Model\Entity\Tag;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tags Model
 */
class TagsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('tags');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasMany('Tagged', [
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
            ->allowEmpty('identifier')
            ->requirePresence('name', 'create')
            ->notEmpty('name');
            /*->requirePresence('keyname', 'create')
            ->notEmpty('keyname')
            ->add('occurrence', 'valid', ['rule' => 'numeric'])
            ->requirePresence('occurrence', 'create')
            ->notEmpty('occurrence');*/

        return $validator;
    }
}
