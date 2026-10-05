<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketsRegionsEntitlementQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketsRegionsEntitlement";

    public function selectCatalogs(ShopifyMarketsRegionsEntitlementCatalogsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketsCatalogsEntitlementQueryObject("catalogs");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEnabled()
    {
        $this->selectField("enabled");

        return $this;
    }
}
