<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class StorefrontAccessTokenConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "StorefrontAccessTokenConnection";

    public function selectEdges(StorefrontAccessTokenConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new StorefrontAccessTokenEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(StorefrontAccessTokenConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new StorefrontAccessTokenQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(StorefrontAccessTokenConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
