<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionManualDiscountConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionManualDiscountConnection";

    public function selectEdges(SubscriptionManualDiscountConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionManualDiscountEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(SubscriptionManualDiscountConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionManualDiscountQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(SubscriptionManualDiscountConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
