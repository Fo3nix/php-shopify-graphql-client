<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ResourcePublicationConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ResourcePublicationConnection";

    public function selectEdges(ResourcePublicationConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ResourcePublicationEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ResourcePublicationConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ResourcePublicationQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ResourcePublicationConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
