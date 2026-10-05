<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyGiftCardEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCardEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyGiftCardEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyGiftCardQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
