<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The valid types of actions a user should be able to perform in an financial app.
 */
class ShopifyBankingFinanceAppAccessEnumObject extends EnumObject
{
    /**
     * Read access in the financial app.
     */
    const READ_ACCESS = "READ_ACCESS";
    /**
     * Ability to perform actions that moves money.
     */
    const MOVE_MONEY = "MOVE_MONEY";
    /**
     * Indication that the user has restricted money movement.
     */
    const MONEY_MOVEMENT_RESTRICTED = "MONEY_MOVEMENT_RESTRICTED";
    /**
     * Indication that the user has blocked money movement due to MFA disabled.
     */
    const MONEY_MOVEMENT_BLOCKED_MFA = "MONEY_MOVEMENT_BLOCKED_MFA";
}
