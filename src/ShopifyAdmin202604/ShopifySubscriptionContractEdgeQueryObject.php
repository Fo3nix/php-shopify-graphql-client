<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionContractEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifySubscriptionContractEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionContractQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
