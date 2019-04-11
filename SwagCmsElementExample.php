<?php
declare(strict_types=1);


namespace ShopwareLabs\Plugin\SwagCmsElementExample;


use Shopware\Core\Framework\Plugin;

class SwagCmsElementExample extends Plugin
{
    public function getAdministrationEntryPath(): string
    {
        return 'Administration';
    }
}