<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one CustomerAccountPage and a cursor during pagination.
 */
class ShopifyCustomerAccountPageEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerAccountPageEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of CustomerAccountPageEdge.
     */
    public function selectNode(?ShopifyCustomerAccountPageEdgeNodeArgumentsObject $argsObject = null): ShopifyCustomerAccountPageInterfaceObject
    {
        $object = new ShopifyCustomerAccountPageInterfaceObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
