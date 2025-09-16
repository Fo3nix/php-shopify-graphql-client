<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ResourcePublicationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ResourcePublicationEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ResourcePublicationEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ResourcePublicationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
