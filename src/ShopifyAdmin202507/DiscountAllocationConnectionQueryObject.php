<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountAllocationConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAllocationConnection";

    public function selectEdges(DiscountAllocationConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new DiscountAllocationEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(DiscountAllocationConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new DiscountAllocationQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(DiscountAllocationConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
