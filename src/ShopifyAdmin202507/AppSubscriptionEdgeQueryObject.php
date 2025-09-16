<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AppSubscriptionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppSubscriptionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(AppSubscriptionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new AppSubscriptionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
