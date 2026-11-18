<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The resolved values based on the markets configuration for a buyer signal. Resolved values include the resolved catalogs, web presences, currency, and price inclusivity.
 */
class ShopifyMarketsResolvedValuesQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketsResolvedValues";

    /**
     * The resolved catalogs.
     */
    public function selectCatalogs(?ShopifyMarketsResolvedValuesCatalogsArgumentsObject $argsObject = null): ShopifyMarketCatalogConnectionQueryObject
    {
        $object = new ShopifyMarketCatalogConnectionQueryObject("catalogs");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The resolved currency code.
     */
    public function selectCurrencyCode(): static
    {
        $this->selectField("currencyCode");

        return $this;
    }

    /**
     * The resolved price inclusivity attributes.
     */
    public function selectPriceInclusivity(?ShopifyMarketsResolvedValuesPriceInclusivityArgumentsObject $argsObject = null): ShopifyResolvedPriceInclusivityQueryObject
    {
        $object = new ShopifyResolvedPriceInclusivityQueryObject("priceInclusivity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The resolved web presences ordered by priority.
     */
    public function selectWebPresences(?ShopifyMarketsResolvedValuesWebPresencesArgumentsObject $argsObject = null): ShopifyMarketWebPresenceConnectionQueryObject
    {
        $object = new ShopifyMarketWebPresenceConnectionQueryObject("webPresences");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
