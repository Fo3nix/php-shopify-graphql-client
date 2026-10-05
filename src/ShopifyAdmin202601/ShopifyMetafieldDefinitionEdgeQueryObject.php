<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetafieldDefinitionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyMetafieldDefinitionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
