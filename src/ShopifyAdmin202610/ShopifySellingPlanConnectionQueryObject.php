<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySellingPlanConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanConnection";

    public function selectEdges(ShopifySellingPlanConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySellingPlanEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifySellingPlanConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySellingPlanQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifySellingPlanConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
