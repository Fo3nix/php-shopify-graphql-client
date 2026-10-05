<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketsB2BEntitlementQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketsB2BEntitlement";

    public function selectCatalogs(ShopifyMarketsB2BEntitlementCatalogsArgumentsObject $argsObject = null)
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
