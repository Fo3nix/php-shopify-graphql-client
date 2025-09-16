<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountAutomaticNodeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAutomaticNodeConnection";

    public function selectEdges(DiscountAutomaticNodeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new DiscountAutomaticNodeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(DiscountAutomaticNodeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new DiscountAutomaticNodeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(DiscountAutomaticNodeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
