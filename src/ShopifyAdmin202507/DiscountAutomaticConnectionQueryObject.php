<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountAutomaticConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAutomaticConnection";

    public function selectEdges(DiscountAutomaticConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new DiscountAutomaticEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(DiscountAutomaticConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new DiscountAutomaticUnionObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(DiscountAutomaticConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
