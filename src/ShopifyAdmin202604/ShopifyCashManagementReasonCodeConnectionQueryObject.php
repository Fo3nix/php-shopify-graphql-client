<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCashManagementReasonCodeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashManagementReasonCodeConnection";

    public function selectEdges(ShopifyCashManagementReasonCodeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCashManagementReasonCodeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyCashManagementReasonCodeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCashManagementReasonCodeUnionObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyCashManagementReasonCodeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
