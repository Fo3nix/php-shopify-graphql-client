<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetafieldRelationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldRelationEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyMetafieldRelationEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldRelationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
