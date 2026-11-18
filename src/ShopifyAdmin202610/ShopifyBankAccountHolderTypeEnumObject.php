<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The type of bank account holder.
 */
class ShopifyBankAccountHolderTypeEnumObject extends EnumObject
{
    /**
     * A company account holder.
     */
    const COMPANY = "COMPANY";
    /**
     * An individual account holder.
     */
    const INDIVIDUAL = "INDIVIDUAL";
}
