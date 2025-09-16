<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ResourcePublicationV2EdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ResourcePublicationV2Edge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ResourcePublicationV2EdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ResourcePublicationV2QueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
