<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryMethodDefinitionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryMethodDefinitionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(DeliveryMethodDefinitionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new DeliveryMethodDefinitionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
