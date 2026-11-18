<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ShopResourceFeedbackCreateUserError`.
 */
class ShopifyShopResourceFeedbackCreateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The feedback for a later version of the resource was already accepted.
     */
    const OUTDATED_FEEDBACK = "OUTDATED_FEEDBACK";
    /**
     * The feedback date cannot be set in the future.
     */
    const FEEDBACK_DATE_IN_FUTURE = "FEEDBACK_DATE_IN_FUTURE";
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
    /**
     * The input value needs to be blank.
     */
    const PRESENT = "PRESENT";
    /**
     * The record with the ID used as the input value couldn't be found.
     */
    const NOT_FOUND = "NOT_FOUND";
}
