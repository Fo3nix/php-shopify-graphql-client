<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyQuantityPriceBreakConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "QuantityPriceBreakConnection";

    public function selectEdges(ShopifyQuantityPriceBreakConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyQuantityPriceBreakEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyQuantityPriceBreakConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyQuantityPriceBreakQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyQuantityPriceBreakConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
