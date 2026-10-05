<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountAllocationConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAllocationConnection";

    public function selectEdges(ShopifyDiscountAllocationConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountAllocationEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyDiscountAllocationConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountAllocationQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyDiscountAllocationConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
