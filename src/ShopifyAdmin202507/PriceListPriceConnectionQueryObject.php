<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class PriceListPriceConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceListPriceConnection";

    public function selectEdges(PriceListPriceConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new PriceListPriceEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(PriceListPriceConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new PriceListPriceQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(PriceListPriceConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
