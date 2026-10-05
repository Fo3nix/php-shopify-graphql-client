<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionInclusionProductSelectionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionInclusionProductSelectionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyCollectionInclusionProductSelectionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionInclusionProductSelectionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
