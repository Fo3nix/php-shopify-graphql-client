<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class BankingFinanceAppAccessEnumObject extends EnumObject
{
    const READ_ACCESS = "READ_ACCESS";
    const MOVE_MONEY = "MOVE_MONEY";
    const MONEY_MOVEMENT_RESTRICTED = "MONEY_MOVEMENT_RESTRICTED";
    const MONEY_MOVEMENT_BLOCKED_MFA = "MONEY_MOVEMENT_BLOCKED_MFA";
}
