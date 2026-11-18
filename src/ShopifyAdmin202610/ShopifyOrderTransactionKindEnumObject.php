<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The different kinds of order transactions.
 */
class ShopifyOrderTransactionKindEnumObject extends EnumObject
{
    /**
     * An authorization and capture performed together in a single step.
     */
    const SALE = "SALE";
    /**
     * A transfer of the money that was reserved by an authorization.
     */
    const CAPTURE = "CAPTURE";
    /**
     * An amount reserved against the cardholder's funding source.
     * Money does not change hands until the authorization is captured.
     */
    const AUTHORIZATION = "AUTHORIZATION";
    /**
     * A cancelation of an authorization transaction.
     */
    const VOID = "VOID";
    /**
     * A partial or full return of captured funds to the cardholder.
     * A refund can happen only after a capture is processed.
     */
    const REFUND = "REFUND";
    /**
     * The money returned to the customer when they've paid too much during a cash transaction.
     */
    const CHANGE = "CHANGE";
    /**
     * An authorization for a payment taken with an EMV credit card reader.
     */
    const EMV_AUTHORIZATION = "EMV_AUTHORIZATION";
    /**
     * A suggested refund transaction that can be used to create a refund.
     */
    const SUGGESTED_REFUND = "SUGGESTED_REFUND";
}
