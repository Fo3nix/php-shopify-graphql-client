<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionPublicationConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionPublicationConnection";

    public function selectEdges(ShopifyCollectionPublicationConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionPublicationEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyCollectionPublicationConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionPublicationQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyCollectionPublicationConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
