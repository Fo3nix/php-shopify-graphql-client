<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyRefundLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "RefundLineItemConnection";

    public function selectEdges(ShopifyRefundLineItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRefundLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyRefundLineItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRefundLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyRefundLineItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
