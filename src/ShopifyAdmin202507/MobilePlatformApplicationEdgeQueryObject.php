<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MobilePlatformApplicationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MobilePlatformApplicationEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(MobilePlatformApplicationEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new MobilePlatformApplicationUnionObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
