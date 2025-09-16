<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionLineEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionLineEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(SubscriptionLineEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionLineQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
