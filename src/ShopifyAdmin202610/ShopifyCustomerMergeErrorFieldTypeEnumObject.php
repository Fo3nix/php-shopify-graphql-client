<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The types of the hard blockers preventing a customer from being merged to another customer.
 */
class ShopifyCustomerMergeErrorFieldTypeEnumObject extends EnumObject
{
    /**
     * The customer does not exist.
     */
    const DELETED_AT = "DELETED_AT";
    /**
     * The customer has a pending or completed redaction.
     */
    const REDACTED_AT = "REDACTED_AT";
    /**
     * The customer has a subscription history.
     */
    const SUBSCRIPTIONS = "SUBSCRIPTIONS";
    /**
     * The customer has a merge in progress.
     */
    const MERGE_IN_PROGRESS = "MERGE_IN_PROGRESS";
    /**
     * The customer has gift cards.
     */
    const GIFT_CARDS = "GIFT_CARDS";
    /**
     * The override fields are invalid.
     */
    const OVERRIDE_FIELDS = "OVERRIDE_FIELDS";
    /**
     * The customer has store credit.
     */
    const STORE_CREDIT = "STORE_CREDIT";
    /**
     * The customer is a company contact.
     */
    const COMPANY_CONTACT = "COMPANY_CONTACT";
    /**
     * The customer has payment methods.
     */
    const CUSTOMER_PAYMENT_METHODS = "CUSTOMER_PAYMENT_METHODS";
    /**
     * The customer has a pending data request.
     */
    const PENDING_DATA_REQUEST = "PENDING_DATA_REQUEST";
    /**
     * The customer has a multipass identifier.
     */
    const MULTIPASS_IDENTIFIER = "MULTIPASS_IDENTIFIER";
}
