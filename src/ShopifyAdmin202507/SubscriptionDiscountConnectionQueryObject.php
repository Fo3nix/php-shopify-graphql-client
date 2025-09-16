<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionDiscountConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDiscountConnection";

    public function selectEdges(SubscriptionDiscountConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionDiscountEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(SubscriptionDiscountConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionDiscountUnionObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(SubscriptionDiscountConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
