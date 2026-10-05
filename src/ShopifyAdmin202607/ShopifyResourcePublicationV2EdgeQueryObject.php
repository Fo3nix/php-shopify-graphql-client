<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyResourcePublicationV2EdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ResourcePublicationV2Edge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyResourcePublicationV2EdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyResourcePublicationV2QueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
