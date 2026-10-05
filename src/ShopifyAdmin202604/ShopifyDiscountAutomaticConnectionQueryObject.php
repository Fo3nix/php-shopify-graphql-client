<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountAutomaticConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAutomaticConnection";

    public function selectEdges(ShopifyDiscountAutomaticConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountAutomaticEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyDiscountAutomaticConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountAutomaticUnionObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyDiscountAutomaticConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
