<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionContractEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(SubscriptionContractEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionContractQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
