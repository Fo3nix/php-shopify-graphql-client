<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one CheckoutAndAccountsConfiguration and a cursor during pagination.
 */
class ShopifyCheckoutAndAccountsConfigurationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of CheckoutAndAccountsConfigurationEdge.
     */
    public function selectNode(?ShopifyCheckoutAndAccountsConfigurationEdgeNodeArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
