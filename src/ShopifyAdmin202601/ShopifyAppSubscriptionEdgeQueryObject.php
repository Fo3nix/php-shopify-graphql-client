<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAppSubscriptionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppSubscriptionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyAppSubscriptionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppSubscriptionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
