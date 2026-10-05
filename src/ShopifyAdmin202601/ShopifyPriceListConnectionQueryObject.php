<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPriceListConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceListConnection";

    public function selectEdges(ShopifyPriceListConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPriceListEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyPriceListConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPriceListQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyPriceListConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
