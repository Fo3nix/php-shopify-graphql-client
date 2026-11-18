<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible dispute evidence file types.
 */
class ShopifyShopifyPaymentsDisputeEvidenceFileTypeEnumObject extends EnumObject
{
    /**
     * Customer Communication File.
     */
    const CUSTOMER_COMMUNICATION_FILE = "CUSTOMER_COMMUNICATION_FILE";
    /**
     * Refund Policy File.
     */
    const REFUND_POLICY_FILE = "REFUND_POLICY_FILE";
    /**
     * Cancellation Policy File.
     */
    const CANCELLATION_POLICY_FILE = "CANCELLATION_POLICY_FILE";
    /**
     * Uncategorized File.
     */
    const UNCATEGORIZED_FILE = "UNCATEGORIZED_FILE";
    /**
     * Shipping Documentation File.
     */
    const SHIPPING_DOCUMENTATION_FILE = "SHIPPING_DOCUMENTATION_FILE";
    /**
     * Service Documentation File.
     */
    const SERVICE_DOCUMENTATION_FILE = "SERVICE_DOCUMENTATION_FILE";
    /**
     * Response Summary File.
     */
    const RESPONSE_SUMMARY_FILE = "RESPONSE_SUMMARY_FILE";
}
