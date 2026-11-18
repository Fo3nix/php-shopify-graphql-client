<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The type of resource a payment mandate can be used for.
 */
class ShopifyMandateResourceTypeEnumObject extends EnumObject
{
    /**
     * A credential stored on file for merchant and customer initiated transactions.
     */
    const CREDENTIAL_ON_FILE = "CREDENTIAL_ON_FILE";
    /**
     * A credential stored on file for checkout.
     */
    const CHECKOUT = "CHECKOUT";
    /**
     * A credential stored on file for a Draft Order.
     */
    const DRAFT_ORDER = "DRAFT_ORDER";
    /**
     * A credential stored on file for an Order.
     */
    const ORDER = "ORDER";
    /**
     * A credential stored for subscription billing attempts.
     */
    const SUBSCRIPTIONS = "SUBSCRIPTIONS";
}
