<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `BulkProductResourceFeedbackCreateUserError`.
 */
class ShopifyBulkProductResourceFeedbackCreateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The operation was attempted on too many feedback objects. The maximum number of feedback objects that you can operate on is 50.
     */
    const MAXIMUM_FEEDBACK_LIMIT_EXCEEDED = "MAXIMUM_FEEDBACK_LIMIT_EXCEEDED";
    /**
     * The feedback for a later version of this resource was already accepted.
     */
    const OUTDATED_FEEDBACK = "OUTDATED_FEEDBACK";
    /**
     * The product wasn't found or isn't available to the channel.
     */
    const PRODUCT_NOT_FOUND = "PRODUCT_NOT_FOUND";
    /**
     * The channel was not found or does not belong to this app.
     */
    const NOT_FOUND = "NOT_FOUND";
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
     * The input value should be less than or equal to the maximum value allowed.
     */
    const LESS_THAN_OR_EQUAL_TO = "LESS_THAN_OR_EQUAL_TO";
}
