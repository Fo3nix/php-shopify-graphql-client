<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The valid values for the inventory policy of a product variant once it is out of stock.
 */
class ShopifyProductVariantInventoryPolicyEnumObject extends EnumObject
{
    /**
     * Customers can't buy this product variant after it's out of stock.
     */
    const DENY = "DENY";
    /**
     * Customers can buy this product variant after it's out of stock.
     */
    const CONTINUE = "CONTINUE";
}
