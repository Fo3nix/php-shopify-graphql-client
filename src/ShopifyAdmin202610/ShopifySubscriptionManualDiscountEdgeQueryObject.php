<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionManualDiscountEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionManualDiscountEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifySubscriptionManualDiscountEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionManualDiscountQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
