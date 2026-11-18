<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Specifies the abandonment type.
 */
class ShopifyAbandonmentAbandonmentTypeEnumObject extends EnumObject
{
    /**
     * The abandonment event is an abandoned browse.
     */
    const BROWSE = "BROWSE";
    /**
     * The abandonment event is an abandoned cart.
     */
    const CART = "CART";
    /**
     * The abandonment event is an abandoned checkout.
     */
    const CHECKOUT = "CHECKOUT";
}
