<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerSegmentMemberEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerSegmentMemberEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyCustomerSegmentMemberEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerSegmentMemberQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
