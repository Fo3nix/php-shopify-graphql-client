<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ResourcePublicationV2ConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ResourcePublicationV2Connection";

    public function selectEdges(ResourcePublicationV2ConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ResourcePublicationV2EdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ResourcePublicationV2ConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ResourcePublicationV2QueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ResourcePublicationV2ConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
