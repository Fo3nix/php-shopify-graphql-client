<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAppInstallationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppInstallationEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyAppInstallationEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppInstallationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
