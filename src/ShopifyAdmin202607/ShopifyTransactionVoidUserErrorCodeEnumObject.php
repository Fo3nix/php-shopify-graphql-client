<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `TransactionVoidUserError`.
 */
class ShopifyTransactionVoidUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Transaction does not exist.
     */
    const TRANSACTION_NOT_FOUND = "TRANSACTION_NOT_FOUND";
    /**
     * Transaction must be a successful authorization.
     */
    const AUTH_NOT_SUCCESSFUL = "AUTH_NOT_SUCCESSFUL";
    /**
     * Transaction must be voidable.
     */
    const AUTH_NOT_VOIDABLE = "AUTH_NOT_VOIDABLE";
    /**
     * A generic error occurred while attempting to void the transaction.
     */
    const GENERIC_ERROR = "GENERIC_ERROR";
}
