<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `CashManagementReasonCodeCreateUserError`.
 */
class ShopifyCashManagementReasonCodeCreateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The reason code already exists.
     */
    const CODE_ALREADY_EXISTS = "CODE_ALREADY_EXISTS";
    /**
     * Failed to create cash management reason code.
     */
    const NOT_SAVED = "NOT_SAVED";
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
}
