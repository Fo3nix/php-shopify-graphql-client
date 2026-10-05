<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeletionEventConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeletionEventConnection";

    public function selectEdges(ShopifyDeletionEventConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeletionEventEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyDeletionEventConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeletionEventQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyDeletionEventConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
