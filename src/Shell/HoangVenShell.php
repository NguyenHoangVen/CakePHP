<?php
namespace App\Shell;
use Cake\Console\Shell;
use Cake\Log\Log;
class HoangVenShell extends Shell 
{
    public function runProcess()
    {
        Log::debug(111111111111);
        Log::info('this gets written only to shops.log', ['scope' => ['textlog']]);
        dd('Hello');
    }
}