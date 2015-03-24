<?php
namespace App\Model\Table;

use App\Model\Entity\Post;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Posts Model
 */
class PostsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('posts');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->addBehavior('CounterCache', ['Categories' => ['post_count']]);
        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id'
        ]);
        $this->hasMany('Comments', [
            'foreignKey' => 'post_id'
        ]);
        $this->hasMany('PostViews', [
            'foreignKey' => 'post_id'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->allowEmpty('slug')
            ->requirePresence('title', 'create')
            ->notEmpty('title')
            ->requirePresence('content', 'create')
            ->notEmpty('content')
            ->add('date_published', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('date_published')
            ->add('post_view_count', 'valid', ['rule' => 'numeric'])
            ->requirePresence('preview', 'create')
            ->notEmpty('preview')
            ->allowEmpty('image')
            ->add('category_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('category_id', 'create')
            ->notEmpty('category_id')
            ->add('published', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('keywords');

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
        $rules->add($rules->existsIn(['category_id'], 'Categories'));
        return $rules;
    }
}
