<?php
namespace App\Controller;
use Cake\Controller\Controller;
use Cake\ORM\TableRegistry;

class ProductsController extends Controller
{
    public function index()
    {
        $productsTb = $this->getTableLocator()->get('Products');
        $categoryProductsTb = $this->getTableLocator()->get('CategoryProducts');
        
        $product = $productsTb->find()
            ->contain([
                'CategoryProducts'
            ])
            ->where(['id' => 3])
            ->toArray();
        dd($product);
        $category = $categoryProductsTb->find()
            ->contain([
                'Products'
            ])
            ->where(['id' => 1]);
        dd($category);

        dd('oj');
    }
}