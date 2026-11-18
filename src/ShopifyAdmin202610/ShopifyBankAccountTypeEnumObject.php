<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The type of bank account.
 */
class ShopifyBankAccountTypeEnumObject extends EnumObject
{
    /**
     * A checking account.
     */
    const CHECKING = "CHECKING";
    /**
     * A savings account.
     */
    const SAVINGS = "SAVINGS";
}
