<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketsRetailEntitlementQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketsRetailEntitlement";

    public function selectCatalogs(ShopifyMarketsRetailEntitlementCatalogsArgumentsObject $argsObject = null)
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
