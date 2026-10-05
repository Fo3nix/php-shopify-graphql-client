<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyStorefrontAccessTokenConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "StorefrontAccessTokenConnection";

    public function selectEdges(ShopifyStorefrontAccessTokenConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStorefrontAccessTokenEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyStorefrontAccessTokenConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStorefrontAccessTokenQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyStorefrontAccessTokenConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
