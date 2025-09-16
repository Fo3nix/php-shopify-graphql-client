<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionBillingCycleEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingCycleEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(SubscriptionBillingCycleEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionBillingCycleQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
