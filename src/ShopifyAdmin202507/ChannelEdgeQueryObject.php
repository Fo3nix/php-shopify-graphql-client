<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ChannelEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ChannelEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ChannelEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ChannelQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
