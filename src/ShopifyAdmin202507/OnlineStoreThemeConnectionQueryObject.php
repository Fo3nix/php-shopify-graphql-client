<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class OnlineStoreThemeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStoreThemeConnection";

    public function selectEdges(OnlineStoreThemeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new OnlineStoreThemeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(OnlineStoreThemeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new OnlineStoreThemeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(OnlineStoreThemeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
