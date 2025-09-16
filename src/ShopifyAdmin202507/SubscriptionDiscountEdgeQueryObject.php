<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionDiscountEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDiscountEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(SubscriptionDiscountEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionDiscountUnionObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
