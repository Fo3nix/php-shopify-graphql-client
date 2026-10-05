<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionConditionsSourcesByAppEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionConditionsSourcesByAppEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyCollectionConditionsSourcesByAppEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionConditionsSourcesByAppQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
