<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one CustomerPaymentMethod and a cursor during pagination.
 */
class ShopifyCustomerPaymentMethodEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerPaymentMethodEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of CustomerPaymentMethodEdge.
     */
    public function selectNode(?ShopifyCustomerPaymentMethodEdgeNodeArgumentsObject $argsObject = null): ShopifyCustomerPaymentMethodQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
