<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->allowEmpty('id', 'create')
            ->requirePresence('username', 'create')
            ->notEmpty('username')
            ->requirePresence('slug', 'create')
            ->notEmpty('slug')
            ->allowEmpty('password')
            ->allowEmpty('password_token')
            ->add('email', 'valid', ['rule' => 'email'])
            ->allowEmpty('email')
            ->add('email_verified', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('email_verified')
            ->allowEmpty('email_token')
            ->add('email_token_expires', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('email_token_expires')
            ->add('tos', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('tos')
            ->add('active', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('active')
            ->add('last_login', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('last_login')
            ->add('last_action', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('last_action')
            ->add('is_admin', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('is_admin')
            ->allowEmpty('role');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}
