<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class ShopifyPaymentsPayoutTransactionTypeEnumObject extends EnumObject
{
    const DEPOSIT = "DEPOSIT";
    const WITHDRAWAL = "WITHDRAWAL";
}
