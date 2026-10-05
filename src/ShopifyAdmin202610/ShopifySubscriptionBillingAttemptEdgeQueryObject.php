<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionBillingAttemptEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifySubscriptionBillingAttemptEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionBillingAttemptQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
