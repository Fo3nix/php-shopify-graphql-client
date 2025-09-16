<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class BalanceTransactionSortKeysEnumObject extends EnumObject
{
    const AMOUNT = "AMOUNT";
    const FEE = "FEE";
    const ID = "ID";
    const NET = "NET";
    const ORDER_NAME = "ORDER_NAME";
    const PAYMENT_METHOD_NAME = "PAYMENT_METHOD_NAME";
    const PAYOUT_DATE = "PAYOUT_DATE";
    const PAYOUT_STATUS = "PAYOUT_STATUS";
    const PROCESSED_AT = "PROCESSED_AT";
    const TRANSACTION_TYPE = "TRANSACTION_TYPE";
}
