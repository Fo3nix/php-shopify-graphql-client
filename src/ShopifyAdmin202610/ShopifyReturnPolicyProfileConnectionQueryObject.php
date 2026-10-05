<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReturnPolicyProfileConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnPolicyProfileConnection";

    public function selectEdges(ShopifyReturnPolicyProfileConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnPolicyProfileEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyReturnPolicyProfileConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnPolicyProfileQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyReturnPolicyProfileConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
