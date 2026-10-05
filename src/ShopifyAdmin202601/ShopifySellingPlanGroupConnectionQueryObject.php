<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifySellingPlanGroupConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanGroupConnection";

    public function selectEdges(ShopifySellingPlanGroupConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySellingPlanGroupEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifySellingPlanGroupConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySellingPlanGroupQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifySellingPlanGroupConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
