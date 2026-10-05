<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetafieldReferenceConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldReferenceConnection";

    public function selectEdges(ShopifyMetafieldReferenceConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldReferenceEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyMetafieldReferenceConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldReferenceUnionObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyMetafieldReferenceConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
