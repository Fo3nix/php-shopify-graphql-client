<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionBillingCycleConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingCycleConnection";

    public function selectEdges(SubscriptionBillingCycleConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionBillingCycleEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(SubscriptionBillingCycleConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionBillingCycleQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(SubscriptionBillingCycleConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
