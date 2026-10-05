<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeletionEventEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeletionEventEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyDeletionEventEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeletionEventQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
