<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CollectionPublicationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionPublicationEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(CollectionPublicationEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new CollectionPublicationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
