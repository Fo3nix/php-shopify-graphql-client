<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketLocalizableResourceEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketLocalizableResourceEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(MarketLocalizableResourceEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new MarketLocalizableResourceQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
