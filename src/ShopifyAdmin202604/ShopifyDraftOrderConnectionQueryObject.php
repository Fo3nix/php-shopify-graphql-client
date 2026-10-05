<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDraftOrderConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderConnection";

    public function selectEdges(ShopifyDraftOrderConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDraftOrderEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyDraftOrderConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDraftOrderQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyDraftOrderConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
