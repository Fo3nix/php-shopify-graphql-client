<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyRefundShippingLineConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "RefundShippingLineConnection";

    public function selectEdges(ShopifyRefundShippingLineConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRefundShippingLineEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyRefundShippingLineConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRefundShippingLineQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyRefundShippingLineConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
