<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPriceListPriceConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceListPriceConnection";

    public function selectEdges(ShopifyPriceListPriceConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPriceListPriceEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyPriceListPriceConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPriceListPriceQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyPriceListPriceConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
