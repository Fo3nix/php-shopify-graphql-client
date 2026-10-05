<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyCollectionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
