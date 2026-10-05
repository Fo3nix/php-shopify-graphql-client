<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReturnReasonDefinitionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnReasonDefinitionConnection";

    public function selectEdges(ShopifyReturnReasonDefinitionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnReasonDefinitionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyReturnReasonDefinitionConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnReasonDefinitionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyReturnReasonDefinitionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
