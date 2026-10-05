<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountNodeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountNodeConnection";

    public function selectEdges(ShopifyDiscountNodeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountNodeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyDiscountNodeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountNodeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyDiscountNodeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
