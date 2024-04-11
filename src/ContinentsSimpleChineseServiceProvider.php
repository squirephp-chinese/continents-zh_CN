<?php
    
    namespace Squire;
    
    use Illuminate\Support\ServiceProvider;
    use Squire\Models\Continent;
    
    class ContinentsSimpleChineseServiceProvider extends ServiceProvider
    {
        public function boot(): void
        {
            Repository::registerSource(Continent::class, 'zh_CN', __DIR__ . '/../resources/data.csv');
        }
    }
