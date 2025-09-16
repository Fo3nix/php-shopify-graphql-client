<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketWebPresenceQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketWebPresence";

    public function selectAlternateLocales(MarketWebPresenceAlternateLocalesArgumentsObject $argsObject = null)
    {
        $object = new ShopLocaleQueryObject("alternateLocales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDefaultLocale(MarketWebPresenceDefaultLocaleArgumentsObject $argsObject = null)
    {
        $object = new ShopLocaleQueryObject("defaultLocale");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDomain(MarketWebPresenceDomainArgumentsObject $argsObject = null)
    {
        $object = new DomainQueryObject("domain");
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
    public function selectMarket(MarketWebPresenceMarketArgumentsObject $argsObject = null)
    {
        $object = new MarketQueryObject("market");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarkets(MarketWebPresenceMarketsArgumentsObject $argsObject = null)
    {
        $object = new MarketConnectionQueryObject("markets");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRootUrls(MarketWebPresenceRootUrlsArgumentsObject $argsObject = null)
    {
        $object = new MarketWebPresenceRootUrlQueryObject("rootUrls");
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
