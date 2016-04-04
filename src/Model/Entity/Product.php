<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity.
 *
 * @property int $id
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property int $product_category_id
 * @property \App\Model\Entity\ProductCategory $product_category
 * @property string $name
 * @property string $product_seo
 * @property string $description
 * @property string $product_condition
 * @property string $year
 * @property int $price
 * @property string $picture_dir
 * @property string $picture
 * @property int $view_count
 * @property int $product_photo_count
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $row_status
 */
class Product extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
