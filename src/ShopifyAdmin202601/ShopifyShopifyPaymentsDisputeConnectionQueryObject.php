<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyPaymentsDisputeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsDisputeConnection";

    public function selectEdges(ShopifyShopifyPaymentsDisputeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsDisputeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyShopifyPaymentsDisputeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsDisputeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyShopifyPaymentsDisputeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
