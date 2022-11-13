<?php
namespace App\Model\Table;
use Cake\ORM\Table;

class ProductsTable extends Table
{
    public function iinitialize(array $config): void
    {
        $this->addBehavior('Timestamp');
        $this->table('products');

        $this->belongsTo('CategoryProducts',[
            'className' => 'CategoryProducts',
            'foreignKey' => 'id',
            'bindingKey' => 'category_product_id'
        ]);
    }
}