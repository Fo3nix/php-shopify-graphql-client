<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketWebPresenceQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketWebPresence";

    public function selectAlternateLocales(ShopifyMarketWebPresenceAlternateLocalesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopLocaleQueryObject("alternateLocales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDefaultLocale(ShopifyMarketWebPresenceDefaultLocaleArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopLocaleQueryObject("defaultLocale");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDomain(ShopifyMarketWebPresenceDomainArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDomainQueryObject("domain");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * @deprecated Use `markets` instead.
     */
    public function selectMarket(ShopifyMarketWebPresenceMarketArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketQueryObject("market");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarkets(ShopifyMarketWebPresenceMarketsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketConnectionQueryObject("markets");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRootUrls(ShopifyMarketWebPresenceRootUrlsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketWebPresenceRootUrlQueryObject("rootUrls");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubfolderSuffix()
    {
        $this->selectField("subfolderSuffix");

        return $this;
    }
}
