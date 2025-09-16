<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CombinedListingChildConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CombinedListingChildConnection";

    public function selectEdges(CombinedListingChildConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new CombinedListingChildEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(CombinedListingChildConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new CombinedListingChildQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(CombinedListingChildConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
