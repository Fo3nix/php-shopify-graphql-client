<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionDiscountEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDiscountEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifySubscriptionDiscountEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionDiscountUnionObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
