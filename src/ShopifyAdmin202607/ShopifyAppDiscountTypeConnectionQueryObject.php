<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAppDiscountTypeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppDiscountTypeConnection";

    public function selectEdges(ShopifyAppDiscountTypeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppDiscountTypeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyAppDiscountTypeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppDiscountTypeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyAppDiscountTypeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
