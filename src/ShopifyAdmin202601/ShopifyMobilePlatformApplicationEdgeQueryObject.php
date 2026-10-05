<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMobilePlatformApplicationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MobilePlatformApplicationEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyMobilePlatformApplicationEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMobilePlatformApplicationUnionObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
