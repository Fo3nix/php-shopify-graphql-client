<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionExclusionProductSelectionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionExclusionProductSelectionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyCollectionExclusionProductSelectionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionExclusionProductSelectionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
