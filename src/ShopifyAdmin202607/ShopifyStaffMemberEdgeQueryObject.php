<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyStaffMemberEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "StaffMemberEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyStaffMemberEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStaffMemberQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
