<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionConditionsSourceEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionConditionsSourceEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyCollectionConditionsSourceEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionConditionsSourceQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
