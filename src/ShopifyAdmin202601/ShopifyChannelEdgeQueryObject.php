<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyChannelEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ChannelEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyChannelEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyChannelQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
