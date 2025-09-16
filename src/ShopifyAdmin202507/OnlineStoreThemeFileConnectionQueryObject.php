<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class OnlineStoreThemeFileConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStoreThemeFileConnection";

    public function selectEdges(OnlineStoreThemeFileConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new OnlineStoreThemeFileEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(OnlineStoreThemeFileConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new OnlineStoreThemeFileQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(OnlineStoreThemeFileConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUserErrors(OnlineStoreThemeFileConnectionUserErrorsArgumentsObject $argsObject = null)
    {
        $object = new OnlineStoreThemeFileReadResultQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
