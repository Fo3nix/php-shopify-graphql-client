<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionBillingAttemptConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingAttemptConnection";

    public function selectEdges(SubscriptionBillingAttemptConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionBillingAttemptEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(SubscriptionBillingAttemptConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionBillingAttemptQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(SubscriptionBillingAttemptConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
