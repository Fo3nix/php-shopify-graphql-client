<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class QuantityPriceBreakConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "QuantityPriceBreakConnection";

    public function selectEdges(QuantityPriceBreakConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new QuantityPriceBreakEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(QuantityPriceBreakConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new QuantityPriceBreakQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(QuantityPriceBreakConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
