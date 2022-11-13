<?php
namespace App\Shell;
use Cake\Console\Shell;
use Cake\Log\Log;
use Cake\ORM\TableRegistry;
use Cake\ORM\Locator\LocatorAwareTrait;

class TestShell extends Shell 
{

    public function iinitialize(array $config): void
    {
        $productsTb = $this->getTableLocator()->get('Products');
    }

    public function runProcess()
    {
        dd($this->productsTb);
        Log::debug(111111111111);
        Log::info('this gets written only to shops.log', ['scope' => ['textlog']]);
        dd('Hello');
    }
}