<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionPublicationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionPublicationEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyCollectionPublicationEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionPublicationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
