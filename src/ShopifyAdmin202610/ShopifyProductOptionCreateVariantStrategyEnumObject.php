<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of variant strategies available for use in the `productOptionsCreate` mutation.
 */
class ShopifyProductOptionCreateVariantStrategyEnumObject extends EnumObject
{
    /**
     * No additional variants are created in response to the added options. Existing variants are updated with the
     * first option value of each option added.
     */
    const LEAVE_AS_IS = "LEAVE_AS_IS";
    /**
     * Existing variants are updated with the first option value of each added option. New variants are
     * created for each combination of existing variant option values and new option values.
     */
    const CREATE = "CREATE";
}
