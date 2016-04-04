<?php
namespace App\Model\Table;

use App\Model\Entity\Product;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $ProductCategories
 */
class ProductsTable extends Table
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

        $this->table('products');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ProductCategories', [
            'foreignKey' => 'product_category_id',
            'joinType' => 'INNER'
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('product_seo', 'create')
            ->notEmpty('product_seo');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->requirePresence('product_condition', 'create')
            ->notEmpty('product_condition');

        $validator
            ->allowEmpty('year');

        $validator
            ->add('price', 'valid', ['rule' => 'numeric'])
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->requirePresence('picture_dir', 'create')
            ->notEmpty('picture_dir');

        $validator
            ->requirePresence('picture', 'create')
            ->notEmpty('picture');

        $validator
            ->add('view_count', 'valid', ['rule' => 'numeric'])
            ->requirePresence('view_count', 'create')
            ->notEmpty('view_count');

        $validator
            ->add('product_photo_count', 'valid', ['rule' => 'numeric'])
            ->requirePresence('product_photo_count', 'create')
            ->notEmpty('product_photo_count');

        $validator
            ->add('row_status', 'valid', ['rule' => 'numeric'])
            ->requirePresence('row_status', 'create')
            ->notEmpty('row_status');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['product_category_id'], 'ProductCategories'));
        return $rules;
    }
}
