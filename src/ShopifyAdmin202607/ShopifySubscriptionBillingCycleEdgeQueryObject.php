<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionBillingCycleEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingCycleEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifySubscriptionBillingCycleEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionBillingCycleQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
