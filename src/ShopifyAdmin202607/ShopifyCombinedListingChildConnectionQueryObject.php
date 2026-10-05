<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCombinedListingChildConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CombinedListingChildConnection";

    public function selectEdges(ShopifyCombinedListingChildConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCombinedListingChildEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyCombinedListingChildConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCombinedListingChildQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyCombinedListingChildConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
