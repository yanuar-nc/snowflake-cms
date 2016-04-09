<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductImage Entity.
 *
 * @property int $id
 * @property int $product_id
 * @property \App\Model\Entity\Product $product
 * @property string $title
 * @property $image
 * @property string $image_dir
 */
class ProductImage extends Entity
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
        'product_id' => false,
    ];
}
