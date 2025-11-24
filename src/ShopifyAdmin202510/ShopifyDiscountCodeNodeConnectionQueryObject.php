<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountCodeNodeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCodeNodeConnection";

    public function selectEdges(ShopifyDiscountCodeNodeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountCodeNodeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyDiscountCodeNodeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountCodeNodeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyDiscountCodeNodeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
