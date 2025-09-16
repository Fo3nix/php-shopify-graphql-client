<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketsB2BEntitlementQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketsB2BEntitlement";

    public function selectCatalogs(MarketsB2BEntitlementCatalogsArgumentsObject $argsObject = null)
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
