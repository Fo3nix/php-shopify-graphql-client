<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one CustomerSegmentMember and a cursor during pagination.
 */
class ShopifyCustomerSegmentMemberEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerSegmentMemberEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of CustomerSegmentMemberEdge.
     */
    public function selectNode(?ShopifyCustomerSegmentMemberEdgeNodeArgumentsObject $argsObject = null): ShopifyCustomerSegmentMemberQueryObject
    {
        $object = new ShopifyCustomerSegmentMemberQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
