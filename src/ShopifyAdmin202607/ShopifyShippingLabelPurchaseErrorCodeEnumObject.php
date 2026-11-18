<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ShippingLabelPurchaseError`.
 */
class ShopifyShippingLabelPurchaseErrorCodeEnumObject extends EnumObject
{
    /**
     * There is another shipping label being purchased for this order.
     */
    const JOB_NOT_ENQUEUED = "JOB_NOT_ENQUEUED";
    /**
     * We are still processing the purchase for this label.
     */
    const PURCHASE_IN_PROGRESS = "PURCHASE_IN_PROGRESS";
    /**
     * The shipping label could not be purchased due to invalid information. Please verify the shipping address, package weight and dimensions, and customs details (for international shipments).
     */
    const PURCHASE_LABEL_VALIDATION_ERROR = "PURCHASE_LABEL_VALIDATION_ERROR";
    /**
     * Kill switch is enabled for this carrier.
     */
    const KILL_SWITCH = "KILL_SWITCH";
    /**
     * The carrier is not available for this label. Please try another carrier.
     */
    const CARRIER_NOT_AVAILABLE = "CARRIER_NOT_AVAILABLE";
    /**
     * The requested shop's shipping account is disabled. Please contact support.
     */
    const DISABLED_SHIPPING_ACCOUNT = "DISABLED_SHIPPING_ACCOUNT";
    /**
     * We could not reach the shipping carrier. Please try again in a few minutes.
     */
    const CONNECTION_ERROR = "CONNECTION_ERROR";
    /**
     * An error occurred while purchasing the label. Please try again.
     */
    const TRANSIENT_ERROR = "TRANSIENT_ERROR";
    /**
     * A non-recoverable error occurred while purchasing the label. Review the shipment details and try again.
     */
    const PERMANENT_ERROR = "PERMANENT_ERROR";
    /**
     * An unknown error occurred while purchasing the label.
     */
    const UNKNOWN_ERROR = "UNKNOWN_ERROR";
}
