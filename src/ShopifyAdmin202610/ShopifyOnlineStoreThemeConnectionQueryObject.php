<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyOnlineStoreThemeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStoreThemeConnection";

    public function selectEdges(ShopifyOnlineStoreThemeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOnlineStoreThemeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyOnlineStoreThemeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOnlineStoreThemeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyOnlineStoreThemeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
