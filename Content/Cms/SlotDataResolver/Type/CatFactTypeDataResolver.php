<?php
declare(strict_types=1);


namespace ShopwareLabs\Plugin\SwagCmsElementExample\Content\Cms\SlotDataResolver\Type;


use Shopware\Core\Content\Cms\Aggregate\CmsSlot\CmsSlotEntity;
use Shopware\Core\Content\Cms\SlotDataResolver\CriteriaCollection;
use Shopware\Core\Content\Cms\SlotDataResolver\ResolverContext\ResolverContext;
use Shopware\Core\Content\Cms\SlotDataResolver\SlotDataResolveResult;
use Shopware\Core\Content\Cms\SlotDataResolver\Type\TypeDataResolver;
use ShopwareLabs\Plugin\SwagCmsElementExample\Content\Cms\Storefront\Struct\CatFactStruct;

class CatFactTypeDataResolver extends TypeDataResolver
{
    public function getType(): string
    {
        return 'cat-fact';
    }

    public function collect(CmsSlotEntity $slot, ResolverContext $resolverContext): ?CriteriaCollection
    {
        return null;
    }

    public function enrich(CmsSlotEntity $slot, ResolverContext $resolverContext, SlotDataResolveResult $result): void
    {
        $facts = [
            'Did you know that eighty percent of tabby cats are male?',
            'Only female cats have three distinct fur colours.',
            'In ancient Egypt, cats were believed to be godly creatures.',
            'Cats sleep about two thirds of their life.',
            'Most cats recognise their name when being called. They just choose to ignore it.',
            'While dogs were domesticated by men, cats are believed to have domesticated themselves.',
            'Tigers, lions and leopards can only purr while breathing out. Panthers cannot purr at all.',
        ];

        $factString = $facts[random_int(0, count($facts) - 1)];
        $factStruct = new CatFactStruct();
        $factStruct->setFact($factString);

        $slot->setData($factStruct);
    }
}