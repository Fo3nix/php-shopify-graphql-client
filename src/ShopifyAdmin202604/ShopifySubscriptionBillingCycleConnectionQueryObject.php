<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionBillingCycleConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingCycleConnection";

    public function selectEdges(ShopifySubscriptionBillingCycleConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionBillingCycleEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifySubscriptionBillingCycleConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionBillingCycleQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifySubscriptionBillingCycleConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
