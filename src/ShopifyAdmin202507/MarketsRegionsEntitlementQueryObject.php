<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketsRegionsEntitlementQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketsRegionsEntitlement";

    public function selectCatalogs(MarketsRegionsEntitlementCatalogsArgumentsObject $argsObject = null)
    {
        $object = new MarketsCatalogsEntitlementQueryObject("catalogs");
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
