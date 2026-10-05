<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyOnlineStoreThemeFileConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStoreThemeFileConnection";

    public function selectEdges(ShopifyOnlineStoreThemeFileConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOnlineStoreThemeFileEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyOnlineStoreThemeFileConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOnlineStoreThemeFileQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyOnlineStoreThemeFileConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUserErrors(ShopifyOnlineStoreThemeFileConnectionUserErrorsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOnlineStoreThemeFileReadResultQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
