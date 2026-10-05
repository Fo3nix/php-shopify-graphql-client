<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountAutomaticNodeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAutomaticNodeConnection";

    public function selectEdges(ShopifyDiscountAutomaticNodeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountAutomaticNodeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyDiscountAutomaticNodeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountAutomaticNodeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyDiscountAutomaticNodeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
