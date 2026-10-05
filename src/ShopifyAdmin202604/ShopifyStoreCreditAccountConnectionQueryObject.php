<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyStoreCreditAccountConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "StoreCreditAccountConnection";

    public function selectEdges(ShopifyStoreCreditAccountConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStoreCreditAccountEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyStoreCreditAccountConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStoreCreditAccountQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyStoreCreditAccountConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
