<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPointOfSaleDevicePaymentSessionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "PointOfSaleDevicePaymentSessionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyPointOfSaleDevicePaymentSessionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPointOfSaleDevicePaymentSessionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
