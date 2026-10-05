<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyResourcePublicationConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ResourcePublicationConnection";

    public function selectEdges(ShopifyResourcePublicationConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyResourcePublicationEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyResourcePublicationConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyResourcePublicationQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyResourcePublicationConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
