<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionExclusionProductSelectionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionExclusionProductSelectionConnection";

    public function selectEdges(ShopifyCollectionExclusionProductSelectionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionExclusionProductSelectionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyCollectionExclusionProductSelectionConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionExclusionProductSelectionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyCollectionExclusionProductSelectionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
