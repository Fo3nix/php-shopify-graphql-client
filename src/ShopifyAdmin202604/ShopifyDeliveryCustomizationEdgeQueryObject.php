<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryCustomizationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCustomizationEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyDeliveryCustomizationEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryCustomizationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
