<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionManualDiscountConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionManualDiscountConnection";

    public function selectEdges(ShopifySubscriptionManualDiscountConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionManualDiscountEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifySubscriptionManualDiscountConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionManualDiscountQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifySubscriptionManualDiscountConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
