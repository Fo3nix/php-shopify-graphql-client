<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionDiscountConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDiscountConnection";

    public function selectEdges(ShopifySubscriptionDiscountConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionDiscountEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifySubscriptionDiscountConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionDiscountUnionObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifySubscriptionDiscountConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
