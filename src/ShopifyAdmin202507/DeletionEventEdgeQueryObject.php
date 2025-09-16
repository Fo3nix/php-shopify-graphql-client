<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeletionEventEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeletionEventEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(DeletionEventEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new DeletionEventQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
