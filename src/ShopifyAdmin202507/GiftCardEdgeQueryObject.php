<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class GiftCardEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCardEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(GiftCardEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new GiftCardQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
