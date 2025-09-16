<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionManualDiscountEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionManualDiscountEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(SubscriptionManualDiscountEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionManualDiscountQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
