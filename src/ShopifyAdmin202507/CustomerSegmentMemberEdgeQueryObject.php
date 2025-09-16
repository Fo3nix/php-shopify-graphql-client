<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CustomerSegmentMemberEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerSegmentMemberEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(CustomerSegmentMemberEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new CustomerSegmentMemberQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
