<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class StaffMemberEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "StaffMemberEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(StaffMemberEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new StaffMemberQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
