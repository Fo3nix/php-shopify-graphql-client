<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SellingPlanGroupConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanGroupConnection";

    public function selectEdges(SellingPlanGroupConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new SellingPlanGroupEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(SellingPlanGroupConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new SellingPlanGroupQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(SellingPlanGroupConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
