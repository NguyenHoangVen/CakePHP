<?php
namespace App\Model\Table;
use Cake\ORM\Table;

class CategoryProductsTable extends Table
{
    public function iinitialize(array $config): void
    {
        $this->addBehavior('Timestamp');
        $this->table('category_products');

        $this->hasMany('Products', [
            'className' => 'Products',
            'foreignKey' => 'category_product_id',
        ]);
    }
}