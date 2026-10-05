<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionLineEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionLineEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifySubscriptionLineEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionLineQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
