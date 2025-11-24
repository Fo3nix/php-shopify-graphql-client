<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryMethodDefinitionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryMethodDefinitionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyDeliveryMethodDefinitionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryMethodDefinitionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
