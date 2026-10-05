<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyLocalizedFieldConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocalizedFieldConnection";

    public function selectEdges(ShopifyLocalizedFieldConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocalizedFieldEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyLocalizedFieldConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocalizedFieldQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyLocalizedFieldConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
