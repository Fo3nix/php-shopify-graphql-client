<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionBillingAttemptConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptConnection";

    public function selectEdges(ShopifySubscriptionBillingAttemptConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionBillingAttemptEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifySubscriptionBillingAttemptConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionBillingAttemptQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifySubscriptionBillingAttemptConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
