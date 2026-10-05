<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionInclusionProductSelectionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionInclusionProductSelectionConnection";

    public function selectEdges(ShopifyCollectionInclusionProductSelectionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionInclusionProductSelectionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyCollectionInclusionProductSelectionConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionInclusionProductSelectionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyCollectionInclusionProductSelectionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
