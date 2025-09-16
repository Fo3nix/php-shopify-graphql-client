<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketingActivityEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingActivityEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(MarketingActivityEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new MarketingActivityQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
