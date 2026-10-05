<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPointOfSaleDeviceEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "PointOfSaleDeviceEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyPointOfSaleDeviceEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPointOfSaleDeviceQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
