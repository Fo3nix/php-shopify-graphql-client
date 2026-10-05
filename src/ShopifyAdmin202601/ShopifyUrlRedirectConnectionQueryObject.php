<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyUrlRedirectConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "UrlRedirectConnection";

    public function selectEdges(ShopifyUrlRedirectConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyUrlRedirectEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyUrlRedirectConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyUrlRedirectQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyUrlRedirectConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
