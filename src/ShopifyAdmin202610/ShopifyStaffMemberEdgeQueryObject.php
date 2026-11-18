<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one StaffMember and a cursor during pagination.
 */
class ShopifyStaffMemberEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "StaffMemberEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of StaffMemberEdge.
     */
    public function selectNode(?ShopifyStaffMemberEdgeNodeArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
