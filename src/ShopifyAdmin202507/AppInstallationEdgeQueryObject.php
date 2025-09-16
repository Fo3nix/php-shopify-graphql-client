<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AppInstallationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppInstallationEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(AppInstallationEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new AppInstallationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
