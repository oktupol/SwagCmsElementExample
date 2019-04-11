<?php
declare(strict_types=1);


namespace ShopwareLabs\Plugin\SwagCmsElementExample\Content\Cms\Storefront\Struct;


use Shopware\Core\Framework\Struct\Struct;

class CatFactStruct extends Struct
{
    /**
     * @var string
     */
    protected $fact;

    public function getFact(): string
    {
        return $this->fact;
    }

    public function setFact(string $fact): void
    {
        $this->fact = $fact;
    }
}