<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountRedeemCodeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountRedeemCodeConnection";

    public function selectEdges(ShopifyDiscountRedeemCodeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountRedeemCodeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyDiscountRedeemCodeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountRedeemCodeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyDiscountRedeemCodeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
