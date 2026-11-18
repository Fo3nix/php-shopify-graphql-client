<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The supported topics for webhook subscriptions. You can use webhook subscriptions to receive
 * notifications about particular events in a shop.
 *
 * You create [mandatory webhooks](https://shopify.dev/apps/webhooks/configuration/mandatory-webhooks#mandatory-compliance-webhooks) either via the
 * [Partner Dashboard](https://shopify.dev/apps/webhooks/configuration/mandatory-webhooks#subscribe-to-privacy-webhooks)
 * or by updating the [app configuration file](https://shopify.dev/apps/tools/cli/configuration#app-configuration-file-example).
 *
 * > Tip:
 * >To configure your subscription using the app configuration file, refer to the [full list of topic names](https://shopify.dev/docs/api/webhooks?reference=graphql).
 */
class ShopifyWebhookSubscriptionTopicEnumObject extends EnumObject
{
    /**
     * The webhook topic for `tax_summaries/create` events. Occurs when a tax summary is created. Consumed by tax partners. Requires at least one of the following scopes: read_fulfillments, read_marketplace_orders, read_orders.
     */
    const TAX_SUMMARIES_CREATE = "TAX_SUMMARIES_CREATE";
    /**
     * The webhook topic for `app/uninstalled` events. Occurs whenever a shop has uninstalled the app.
     */
    const APP_UNINSTALLED = "APP_UNINSTALLED";
    /**
     * The webhook topic for `app/scopes_update` events. Occurs whenever the access scopes of any installation are modified. Allows apps to keep track of the granted access scopes of their installations.
     */
    const APP_SCOPES_UPDATE = "APP_SCOPES_UPDATE";
    /**
     * The webhook topic for `carts/create` events. Occurs when a cart is created in the online store. Other types of carts aren't supported. For example, the webhook doesn't support carts that are created in a custom storefront. Requires the `read_orders` scope.
     */
    const CARTS_CREATE = "CARTS_CREATE";
    /**
     * The webhook topic for `carts/update` events. Occurs when a cart is updated in the online store. Other types of carts aren't supported. For example, the webhook doesn't support carts that are updated in a custom storefront. Requires the `read_orders` scope.
     */
    const CARTS_UPDATE = "CARTS_UPDATE";
    /**
     * The webhook topic for `channels/delete` events. Occurs whenever a channel is deleted. Requires the `read_publications` scope.
     */
    const CHANNELS_DELETE = "CHANNELS_DELETE";
    /**
     * The webhook topic for `checkouts/create` events. Occurs whenever a checkout is created. Requires the `read_orders` scope.
     */
    const CHECKOUTS_CREATE = "CHECKOUTS_CREATE";
    /**
     * The webhook topic for `checkouts/delete` events. Occurs whenever a checkout is deleted. Requires the `read_orders` scope.
     */
    const CHECKOUTS_DELETE = "CHECKOUTS_DELETE";
    /**
     * The webhook topic for `checkouts/update` events. Occurs whenever a checkout is updated. Requires the `read_orders` scope.
     */
    const CHECKOUTS_UPDATE = "CHECKOUTS_UPDATE";
    /**
     * The webhook topic for `customer_payment_methods/create` events. Occurs whenever a customer payment method is created. Requires the `read_customer_payment_methods` scope.
     */
    const CUSTOMER_PAYMENT_METHODS_CREATE = "CUSTOMER_PAYMENT_METHODS_CREATE";
    /**
     * The webhook topic for `customer_payment_methods/update` events. Occurs whenever a customer payment method is updated. Requires the `read_customer_payment_methods` scope.
     */
    const CUSTOMER_PAYMENT_METHODS_UPDATE = "CUSTOMER_PAYMENT_METHODS_UPDATE";
    /**
     * The webhook topic for `customer_payment_methods/revoke` events. Occurs whenever a customer payment method is revoked. Requires the `read_customer_payment_methods` scope.
     */
    const CUSTOMER_PAYMENT_METHODS_REVOKE = "CUSTOMER_PAYMENT_METHODS_REVOKE";
    /**
     * The webhook topic for `collection_listings/add` events. Occurs whenever a collection listing is added. Requires the `read_product_listings` scope.
     */
    const COLLECTION_LISTINGS_ADD = "COLLECTION_LISTINGS_ADD";
    /**
     * The webhook topic for `collection_listings/remove` events. Occurs whenever a collection listing is removed. Requires the `read_product_listings` scope.
     */
    const COLLECTION_LISTINGS_REMOVE = "COLLECTION_LISTINGS_REMOVE";
    /**
     * The webhook topic for `collection_listings/update` events. Occurs whenever a collection listing is updated. Requires the `read_product_listings` scope.
     */
    const COLLECTION_LISTINGS_UPDATE = "COLLECTION_LISTINGS_UPDATE";
    /**
     * The webhook topic for `collection_publications/create` events. Occurs whenever a collection publication listing is created. Requires the `read_publications` scope.
     */
    const COLLECTION_PUBLICATIONS_CREATE = "COLLECTION_PUBLICATIONS_CREATE";
    /**
     * The webhook topic for `collection_publications/delete` events. Occurs whenever a collection publication listing is deleted. Requires the `read_publications` scope.
     */
    const COLLECTION_PUBLICATIONS_DELETE = "COLLECTION_PUBLICATIONS_DELETE";
    /**
     * The webhook topic for `collection_publications/update` events. Occurs whenever a collection publication listing is updated. Requires the `read_publications` scope.
     */
    const COLLECTION_PUBLICATIONS_UPDATE = "COLLECTION_PUBLICATIONS_UPDATE";
    /**
     * The webhook topic for `collections/create` events. Occurs whenever a collection is created. Requires the `read_products` scope.
     */
    const COLLECTIONS_CREATE = "COLLECTIONS_CREATE";
    /**
     * The webhook topic for `collections/delete` events. Occurs whenever a collection is deleted. Requires the `read_products` scope.
     */
    const COLLECTIONS_DELETE = "COLLECTIONS_DELETE";
    /**
     * The webhook topic for `collections/update` events. Occurs whenever a collection is updated, including when a product is manually added or removed from the collection or when the collection rules change. Occurs once if multiple products are manually added or removed from a collection at the same time. Not fired when attribute changes affect whether a product matches a collection's rules. Requires the `read_products` scope.
     */
    const COLLECTIONS_UPDATE = "COLLECTIONS_UPDATE";
    /**
     * The webhook topic for `customer_groups/create` events. Occurs whenever a customer saved search is created. Requires the `read_customers` scope.
     */
    const CUSTOMER_GROUPS_CREATE = "CUSTOMER_GROUPS_CREATE";
    /**
     * The webhook topic for `customer_groups/delete` events. Occurs whenever a customer saved search is deleted. Requires the `read_customers` scope.
     */
    const CUSTOMER_GROUPS_DELETE = "CUSTOMER_GROUPS_DELETE";
    /**
     * The webhook topic for `customer_groups/update` events. Occurs whenever a customer saved search is updated. Requires the `read_customers` scope.
     */
    const CUSTOMER_GROUPS_UPDATE = "CUSTOMER_GROUPS_UPDATE";
    /**
     * The webhook topic for `customers/create` events. Occurs whenever a customer is created. Requires the `read_customers` scope.
     */
    const CUSTOMERS_CREATE = "CUSTOMERS_CREATE";
    /**
     * The webhook topic for `customers/delete` events. Occurs whenever a customer is deleted. Requires the `read_customers` scope.
     */
    const CUSTOMERS_DELETE = "CUSTOMERS_DELETE";
    /**
     * The webhook topic for `customers/disable` events. Occurs whenever a customer account is disabled. Requires the `read_customers` scope.
     */
    const CUSTOMERS_DISABLE = "CUSTOMERS_DISABLE";
    /**
     * The webhook topic for `customers/enable` events. Occurs whenever a customer account is enabled, including first sign-ins. Requires the `read_customers` scope.
     */
    const CUSTOMERS_ENABLE = "CUSTOMERS_ENABLE";
    /**
     * The webhook topic for `customers/update` events. Occurs whenever a customer is updated. Requires the `read_customers` scope.
     */
    const CUSTOMERS_UPDATE = "CUSTOMERS_UPDATE";
    /**
     * The webhook topic for `customers/purchasing_summary` events. Occurs when a customer sales history change. Requires the `read_customers` scope.
     */
    const CUSTOMERS_PURCHASING_SUMMARY = "CUSTOMERS_PURCHASING_SUMMARY";
    /**
     * The webhook topic for `customers_marketing_consent/update` events. Occurs whenever a customer's SMS marketing consent is updated. Requires the `read_customers` scope.
     */
    const CUSTOMERS_MARKETING_CONSENT_UPDATE = "CUSTOMERS_MARKETING_CONSENT_UPDATE";
    /**
     * The webhook topic for `customer.tags_added` events. Triggers when tags are added to a customer. Requires the `read_customers` scope.
     */
    const CUSTOMER_TAGS_ADDED = "CUSTOMER_TAGS_ADDED";
    /**
     * The webhook topic for `customer.tags_removed` events. Triggers when tags are removed from a customer. Requires the `read_customers` scope.
     */
    const CUSTOMER_TAGS_REMOVED = "CUSTOMER_TAGS_REMOVED";
    /**
     * The webhook topic for `customers_email_marketing_consent/update` events. Occurs whenever a customer's email marketing consent is updated. Requires the `read_customers` scope.
     */
    const CUSTOMERS_EMAIL_MARKETING_CONSENT_UPDATE = "CUSTOMERS_EMAIL_MARKETING_CONSENT_UPDATE";
    /**
     * The webhook topic for `disputes/create` events. Occurs whenever a dispute is created. Requires the `read_shopify_payments_disputes` scope.
     */
    const DISPUTES_CREATE = "DISPUTES_CREATE";
    /**
     * The webhook topic for `disputes/update` events. Occurs whenever a dispute is updated. Requires the `read_shopify_payments_disputes` scope.
     */
    const DISPUTES_UPDATE = "DISPUTES_UPDATE";
    /**
     * The webhook topic for `draft_orders/create` events. Occurs whenever a draft order is created. Requires the `read_draft_orders` scope.
     */
    const DRAFT_ORDERS_CREATE = "DRAFT_ORDERS_CREATE";
    /**
     * The webhook topic for `draft_orders/delete` events. Occurs whenever a draft order is deleted. Requires the `read_draft_orders` scope.
     */
    const DRAFT_ORDERS_DELETE = "DRAFT_ORDERS_DELETE";
    /**
     * The webhook topic for `draft_orders/update` events. Occurs whenever a draft order is updated. Requires the `read_draft_orders` scope.
     */
    const DRAFT_ORDERS_UPDATE = "DRAFT_ORDERS_UPDATE";
    /**
     * The webhook topic for `fulfillment_events/create` events. Occurs whenever a fulfillment event is created. Requires the `read_fulfillments` scope.
     */
    const FULFILLMENT_EVENTS_CREATE = "FULFILLMENT_EVENTS_CREATE";
    /**
     * The webhook topic for `fulfillment_events/delete` events. Occurs whenever a fulfillment event is deleted. Requires the `read_fulfillments` scope.
     */
    const FULFILLMENT_EVENTS_DELETE = "FULFILLMENT_EVENTS_DELETE";
    /**
     * The webhook topic for `fulfillments/create` events. Occurs whenever a fulfillment is created. Requires at least one of the following scopes: read_fulfillments, read_marketplace_orders.
     */
    const FULFILLMENTS_CREATE = "FULFILLMENTS_CREATE";
    /**
     * The webhook topic for `fulfillments/update` events. Occurs whenever a fulfillment is updated. Requires at least one of the following scopes: read_fulfillments, read_marketplace_orders.
     */
    const FULFILLMENTS_UPDATE = "FULFILLMENTS_UPDATE";
    /**
     * The webhook topic for `order_transactions/create` events. Occurs when a order transaction is created or when it's status is updated. Only occurs for transactions with a status of success, failure or error. Requires at least one of the following scopes: read_orders, read_marketplace_orders, read_buyer_membership_orders.
     */
    const ORDER_TRANSACTIONS_CREATE = "ORDER_TRANSACTIONS_CREATE";
    /**
     * The webhook topic for `orders/cancelled` events. Occurs whenever an order is cancelled. Requires at least one of the following scopes: read_orders, read_marketplace_orders, read_buyer_membership_orders.
     */
    const ORDERS_CANCELLED = "ORDERS_CANCELLED";
    /**
     * The webhook topic for `orders/create` events. Occurs whenever an order is created. Requires at least one of the following scopes: read_orders, read_marketplace_orders.
     */
    const ORDERS_CREATE = "ORDERS_CREATE";
    /**
     * The webhook topic for `orders/delete` events. Occurs whenever an order is deleted. Requires the `read_orders` scope.
     */
    const ORDERS_DELETE = "ORDERS_DELETE";
    /**
     * The webhook topic for `orders/edited` events. Occurs whenever an order is edited. Requires at least one of the following scopes: read_orders, read_marketplace_orders, read_buyer_membership_orders.
     */
    const ORDERS_EDITED = "ORDERS_EDITED";
    /**
     * The webhook topic for `orders/fulfilled` events. Occurs whenever an order is fulfilled. Requires at least one of the following scopes: read_orders, read_marketplace_orders.
     */
    const ORDERS_FULFILLED = "ORDERS_FULFILLED";
    /**
     * The webhook topic for `orders/paid` events. Occurs whenever an order is paid. Requires at least one of the following scopes: read_orders, read_marketplace_orders.
     */
    const ORDERS_PAID = "ORDERS_PAID";
    /**
     * The webhook topic for `orders/partially_fulfilled` events. Occurs whenever an order is partially fulfilled. Requires at least one of the following scopes: read_orders, read_marketplace_orders.
     */
    const ORDERS_PARTIALLY_FULFILLED = "ORDERS_PARTIALLY_FULFILLED";
    /**
     * The webhook topic for `orders/updated` events. Occurs whenever an order is updated. Requires at least one of the following scopes: read_orders, read_marketplace_orders, read_buyer_membership_orders.
     */
    const ORDERS_UPDATED = "ORDERS_UPDATED";
    /**
     * The webhook topic for `orders/link_requested` events. Occurs whenever a customer requests a new order link from the expired order status page. Requires at least one of the following scopes: read_orders, read_marketplace_orders, read_buyer_membership_orders.
     */
    const ORDERS_LINK_REQUESTED = "ORDERS_LINK_REQUESTED";
    /**
     * The webhook topic for `fulfillment_orders/moved` events. Occurs whenever the location which is assigned to fulfill one or more fulfillment order line items is changed.
     *
     * * `original_fulfillment_order` - The final state of the original fulfillment order.
     * * `moved_fulfillment_order` - The fulfillment order which now contains the re-assigned line items.
     * * `source_location` - The original location which was assigned to fulfill the line items (available as of the `2023-04` API version).
     * * `destination_location_id` - The ID of the location which is now responsible for fulfilling the line items.
     *
     * **Note:** The [assignedLocation](https://shopify.dev/docs/api/admin-graphql/latest/objects/fulfillmentorder#field-fulfillmentorder-assignedlocation)
     * of the `original_fulfillment_order` might be changed by the move operation.
     * If you need to determine the originally assigned location, then you should refer to the `source_location`.
     *
     * [Learn more about moving line items](https://shopify.dev/docs/api/admin-graphql/latest/mutations/fulfillmentOrderMove).
     *  Requires at least one of the following scopes: read_merchant_managed_fulfillment_orders, read_assigned_fulfillment_orders, read_third_party_fulfillment_orders, read_marketplace_fulfillment_orders.
     */
    const FULFILLMENT_ORDERS_MOVED = "FULFILLMENT_ORDERS_MOVED";
    /**
     * The webhook topic for `fulfillment_orders/hold_released` events. Occurs when a fulfillment order is released and is no longer on hold.
     *
     * If a fulfillment order has multiple holds then this webhook will only be triggered once when the last hold is released and the status of the fulfillment order is no longer `ON_HOLD`.
     *  Requires at least one of the following scopes: read_merchant_managed_fulfillment_orders, read_assigned_fulfillment_orders, read_third_party_fulfillment_orders, read_marketplace_fulfillment_orders.
     */
    const FULFILLMENT_ORDERS_HOLD_RELEASED = "FULFILLMENT_ORDERS_HOLD_RELEASED";
    /**
     * The webhook topic for `fulfillment_orders/scheduled_fulfillment_order_ready` events. Occurs whenever a fulfillment order which was scheduled becomes due. Requires at least one of the following scopes: read_merchant_managed_fulfillment_orders, read_assigned_fulfillment_orders, read_third_party_fulfillment_orders, read_marketplace_fulfillment_orders.
     */
    const FULFILLMENT_ORDERS_SCHEDULED_FULFILLMENT_ORDER_READY = "FULFILLMENT_ORDERS_SCHEDULED_FULFILLMENT_ORDER_READY";
    /**
     * The webhook topic for `fulfillment_holds/released` events. Occurs each time that a hold is released from a fulfillment order.
     * For cases where multiple holds are released from a fulfillment order a the same time, this webhook will trigger for each released hold.
     *  Requires at least one of the following scopes: read_merchant_managed_fulfillment_orders, read_assigned_fulfillment_orders, read_third_party_fulfillment_orders, read_marketplace_fulfillment_orders.
     */
    const FULFILLMENT_HOLDS_RELEASED = "FULFILLMENT_HOLDS_RELEASED";
    /**
     * The webhook topic for `fulfillment_orders/order_routing_complete` events. Occurs when an order has finished being routed and it's fulfillment orders assigned to a fulfillment service's location. Requires at least one of the following scopes: read_merchant_managed_fulfillment_orders, read_assigned_fulfillment_orders, read_third_party_fulfillment_orders, read_buyer_membership_orders, read_marketplace_fulfillment_orders.
     */
    const FULFILLMENT_ORDERS_ORDER_ROUTING_COMPLETE = "FULFILLMENT_ORDERS_ORDER_ROUTING_COMPLETE";
    /**
     * The webhook topic for `fulfillment_orders/cancelled` events. Occurs when a fulfillment order is cancelled. Requires at least one of the following scopes: read_merchant_managed_fulfillment_orders, read_assigned_fulfillment_orders, read_third_party_fulfillment_orders, read_marketplace_fulfillment_orders.
     */
    const FULFILLMENT_ORDERS_CANCELLED = "FULFILLMENT_ORDERS_CANCELLED";
    /**
     * The webhook topic for `fulfillment_orders/fulfillment_service_failed_to_complete` events. Occurs when a fulfillment service intends to close an in_progress fulfillment order. Requires at least one of the following scopes: read_merchant_managed_fulfillment_orders, read_assigned_fulfillment_orders, read_third_party_fulfillment_orders, read_marketplace_fulfillment_orders.
     */
    const FULFILLMENT_ORDERS_FULFILLMENT_SERVICE_FAILED_TO_COMPLETE = "FULFILLMENT_ORDERS_FULFILLMENT_SERVICE_FAILED_TO_COMPLETE";
    /**
     * The webhook topic for `fulfillment_orders/fulfillment_request_rejected` events. Occurs when a 3PL rejects a fulfillment request that was sent by a merchant. Requires at least one of the following scopes: read_merchant_managed_fulfillment_orders, read_assigned_fulfillment_orders, read_third_party_fulfillment_orders, read_marketplace_fulfillment_orders.
     */
    const FULFILLMENT_ORDERS_FULFILLMENT_REQUEST_REJECTED = "FULFILLMENT_ORDERS_FULFILLMENT_REQUEST_REJECTED";
    /**
     * The webhook topic for `fulfillment_orders/cancellation_request_submitted` events. Occurs when a merchant requests a fulfillment request to be cancelled after that request was approved by a 3PL. Requires at least one of the following scopes: read_merchant_managed_fulfillment_orders, read_assigned_fulfillment_orders, read_third_party_fulfillment_orders, read_marketplace_fulfillment_orders.
     */
    const FULFILLMENT_ORDERS_CANCELLATION_REQUEST_SUBMITTED = "FULFILLMENT_ORDERS_CANCELLATION_REQUEST_SUBMITTED";
    /**
     * The webhook topic for `fulfillment_orders/cancellation_request_accepted` events. Occurs when a 3PL accepts a fulfillment cancellation request, received from a merchant. Requires at least one of the following scopes: read_merchant_managed_fulfillment_orders, read_assigned_fulfillment_orders, read_third_party_fulfillment_orders, read_marketplace_fulfillment_orders.
     */
    const FULFILLMENT_ORDERS_CANCELLATION_REQUEST_ACCEPTED = "FULFILLMENT_ORDERS_CANCELLATION_REQUEST_ACCEPTED";
    /**
     * The webhook topic for `fulfillment_orders/cancellation_request_rejected` events. Occurs when a 3PL rejects a fulfillment cancellation request, received from a merchant. Requires at least one of the following scopes: read_merchant_managed_fulfillment_orders, read_assigned_fulfillment_orders, read_third_party_fulfillment_orders, read_marketplace_fulfillment_orders.
     */
    const FULFILLMENT_ORDERS_CANCELLATION_REQUEST_REJECTED = "FULFILLMENT_ORDERS_CANCELLATION_REQUEST_REJECTED";
    /**
     * The webhook topic for `fulfillment_orders/fulfillment_request_submitted` events. Occurs when a merchant submits a fulfillment request to a 3PL. Requires at least one of the following scopes: read_merchant_managed_fulfillment_orders, read_assigned_fulfillment_orders, read_third_party_fulfillment_orders, read_marketplace_fulfillment_orders.
     */
    const FULFILLMENT_ORDERS_FULFILLMENT_REQUEST_SUBMITTED = "FULFILLMENT_ORDERS_FULFILLMENT_REQUEST_SUBMITTED";
    /**
     * The webhook topic for `fulfillment_orders/fulfillment_request_accepted` events. Occurs when a fulfillment service accepts a request to fulfill a fulfillment order. Requires at least one of the following scopes: read_merchant_managed_fulfillment_orders, read_assigned_fulfillment_orders, read_third_party_fulfillment_orders, read_marketplace_fulfillment_orders.
     */
    const FULFILLMENT_ORDERS_FULFILLMENT_REQUEST_ACCEPTED = "FULFILLMENT_ORDERS_FULFILLMENT_REQUEST_ACCEPTED";
    /**
     * The webhook topic for `fulfillment_holds/added` events. Occurs each time that a hold is added to a fulfillment order.
     *
     * For cases where multiple holds are applied to a fulfillment order, this webhook will trigger after each hold is applied.
     *  Requires at least one of the following scopes: read_merchant_managed_fulfillment_orders, read_assigned_fulfillment_orders, read_third_party_fulfillment_orders, read_marketplace_fulfillment_orders.
     */
    const FULFILLMENT_HOLDS_ADDED = "FULFILLMENT_HOLDS_ADDED";
    /**
     * The webhook topic for `fulfillment_orders/line_items_prepared_for_local_delivery` events. Occurs whenever a fulfillment order's line items are prepared for local delivery. Requires at least one of the following scopes: read_merchant_managed_fulfillment_orders, read_assigned_fulfillment_orders, read_third_party_fulfillment_orders, read_marketplace_fulfillment_orders.
     */
    const FULFILLMENT_ORDERS_LINE_ITEMS_PREPARED_FOR_LOCAL_DELIVERY = "FULFILLMENT_ORDERS_LINE_ITEMS_PREPARED_FOR_LOCAL_DELIVERY";
    /**
     * The webhook topic for `fulfillment_orders/placed_on_hold` events. Occurs when a fulfillment order transitions to the `ON_HOLD` status
     *
     * For cases where multiple holds are applied to a fulfillment order, this webhook will only trigger once when the first hold is applied and the fulfillment order status changes to `ON_HOLD`.
     *  Requires at least one of the following scopes: read_merchant_managed_fulfillment_orders, read_assigned_fulfillment_orders, read_third_party_fulfillment_orders, read_marketplace_fulfillment_orders.
     */
    const FULFILLMENT_ORDERS_PLACED_ON_HOLD = "FULFILLMENT_ORDERS_PLACED_ON_HOLD";
    /**
     * The webhook topic for `fulfillment_orders/merged` events. Occurs when multiple fulfillment orders are merged into a single fulfillment order. Requires at least one of the following scopes: read_merchant_managed_fulfillment_orders, read_assigned_fulfillment_orders, read_third_party_fulfillment_orders.
     */
    const FULFILLMENT_ORDERS_MERGED = "FULFILLMENT_ORDERS_MERGED";
    /**
     * The webhook topic for `fulfillment_orders/split` events. Occurs when a fulfillment order is split into multiple fulfillment orders. Requires at least one of the following scopes: read_merchant_managed_fulfillment_orders, read_assigned_fulfillment_orders, read_third_party_fulfillment_orders.
     */
    const FULFILLMENT_ORDERS_SPLIT = "FULFILLMENT_ORDERS_SPLIT";
    /**
     * The webhook topic for `fulfillment_orders/progress_reported` events. Occurs when progress is reported for a fulfillment order. Requires at least one of the following scopes: read_merchant_managed_fulfillment_orders, read_assigned_fulfillment_orders, read_third_party_fulfillment_orders.
     */
    const FULFILLMENT_ORDERS_PROGRESS_REPORTED = "FULFILLMENT_ORDERS_PROGRESS_REPORTED";
    /**
     * The webhook topic for `fulfillment_orders/manually_reported_progress_stopped` events. Occurs when a fulfillment order that has previously been manually marked as in progress is marked back as open. Requires at least one of the following scopes: read_merchant_managed_fulfillment_orders, read_assigned_fulfillment_orders, read_third_party_fulfillment_orders.
     */
    const FULFILLMENT_ORDERS_MANUALLY_REPORTED_PROGRESS_STOPPED = "FULFILLMENT_ORDERS_MANUALLY_REPORTED_PROGRESS_STOPPED";
    /**
     * The webhook topic for `product_listings/add` events. Occurs whenever an active product is listed on a channel. Requires the `read_product_listings` scope.
     */
    const PRODUCT_LISTINGS_ADD = "PRODUCT_LISTINGS_ADD";
    /**
     * The webhook topic for `product_listings/remove` events. Occurs whenever a product listing is removed from the channel. Requires the `read_product_listings` scope.
     */
    const PRODUCT_LISTINGS_REMOVE = "PRODUCT_LISTINGS_REMOVE";
    /**
     * The webhook topic for `product_listings/update` events. Occurs whenever a product publication is updated. Requires the `read_product_listings` scope.
     */
    const PRODUCT_LISTINGS_UPDATE = "PRODUCT_LISTINGS_UPDATE";
    /**
     * The webhook topic for `scheduled_product_listings/add` events. Occurs whenever a product is scheduled to be published. Requires the `read_product_listings` scope.
     */
    const SCHEDULED_PRODUCT_LISTINGS_ADD = "SCHEDULED_PRODUCT_LISTINGS_ADD";
    /**
     * The webhook topic for `scheduled_product_listings/update` events. Occurs whenever a product's scheduled availability date changes. Requires the `read_product_listings` scope.
     */
    const SCHEDULED_PRODUCT_LISTINGS_UPDATE = "SCHEDULED_PRODUCT_LISTINGS_UPDATE";
    /**
     * The webhook topic for `scheduled_product_listings/remove` events. Occurs whenever a product is no longer scheduled to be published. Requires the `read_product_listings` scope.
     */
    const SCHEDULED_PRODUCT_LISTINGS_REMOVE = "SCHEDULED_PRODUCT_LISTINGS_REMOVE";
    /**
     * The webhook topic for `product_publications/create` events. Occurs whenever a product publication for an active product is created, or whenever an existing product publication is published on the app that is subscribed to this webhook topic. Note that a webhook is only emitted when there are publishing changes to the app that is subscribed to the topic (ie. no webhook will be emitted if there is a publishing change to the online store and the webhook subscriber of the topic is a third-party app). Requires the `read_publications` scope.
     */
    const PRODUCT_PUBLICATIONS_CREATE = "PRODUCT_PUBLICATIONS_CREATE";
    /**
     * The webhook topic for `product_publications/delete` events. Occurs whenever a product publication for an active product is removed, or whenever an existing product publication is unpublished from the app that is subscribed to this webhook topic. Note that a webhook is only emitted when there are publishing changes to the app that is subscribed to the topic (ie. no webhook will be emitted if there is a publishing change to the online store and the webhook subscriber of the topic is a third-party app). Requires the `read_publications` scope.
     */
    const PRODUCT_PUBLICATIONS_DELETE = "PRODUCT_PUBLICATIONS_DELETE";
    /**
     * The webhook topic for `product_publications/update` events. Occurs whenever a product publication is updated from the app that is subscribed to this webhook topic. Note that a webhook is only emitted when there are publishing changes to the app that is subscribed to the topic (ie. no webhook will be emitted if there is a publishing change to the online store and the webhook subscriber of the topic is a third-party app). Requires the `read_publications` scope.
     */
    const PRODUCT_PUBLICATIONS_UPDATE = "PRODUCT_PUBLICATIONS_UPDATE";
    /**
     * The webhook topic for `products/create` events. Occurs whenever a product is created. Requires the `read_products` scope.
     */
    const PRODUCTS_CREATE = "PRODUCTS_CREATE";
    /**
     * The webhook topic for `products/delete` events. Occurs whenever a product is deleted. Requires the `read_products` scope.
     */
    const PRODUCTS_DELETE = "PRODUCTS_DELETE";
    /**
     * The webhook topic for `products/update` events. Occurs whenever a product is updated, ordered, or variants are added, removed or updated. Requires the `read_products` scope.
     */
    const PRODUCTS_UPDATE = "PRODUCTS_UPDATE";
    /**
     * The webhook topic for `refunds/create` events. Occurs whenever a new refund is created without errors on an order, independent from the movement of money. Requires at least one of the following scopes: read_orders, read_marketplace_orders, read_buyer_membership_orders.
     */
    const REFUNDS_CREATE = "REFUNDS_CREATE";
    /**
     * The webhook topic for `segments/create` events. Occurs whenever a segment is created. Requires the `read_customers` scope.
     */
    const SEGMENTS_CREATE = "SEGMENTS_CREATE";
    /**
     * The webhook topic for `segments/delete` events. Occurs whenever a segment is deleted. Requires the `read_customers` scope.
     */
    const SEGMENTS_DELETE = "SEGMENTS_DELETE";
    /**
     * The webhook topic for `segments/update` events. Occurs whenever a segment is updated. Requires the `read_customers` scope.
     */
    const SEGMENTS_UPDATE = "SEGMENTS_UPDATE";
    /**
     * The webhook topic for `shipping_addresses/create` events. Occurs whenever a shipping address is created. Requires the `read_shipping` scope.
     */
    const SHIPPING_ADDRESSES_CREATE = "SHIPPING_ADDRESSES_CREATE";
    /**
     * The webhook topic for `shipping_addresses/update` events. Occurs whenever a shipping address is updated. Requires the `read_shipping` scope.
     */
    const SHIPPING_ADDRESSES_UPDATE = "SHIPPING_ADDRESSES_UPDATE";
    /**
     * The webhook topic for `shop/update` events. Occurs whenever a shop is updated.
     */
    const SHOP_UPDATE = "SHOP_UPDATE";
    /**
     * The webhook topic for `tax_partners/update` events. Occurs whenever a tax partner is created or updated. Requires the `read_taxes` scope.
     */
    const TAX_PARTNERS_UPDATE = "TAX_PARTNERS_UPDATE";
    /**
     * The webhook topic for `tax_services/create` events. Occurs whenever a tax service is created. Requires the `read_taxes` scope.
     */
    const TAX_SERVICES_CREATE = "TAX_SERVICES_CREATE";
    /**
     * The webhook topic for `tax_services/update` events. Occurs whenever a tax service is updated. Requires the `read_taxes` scope.
     */
    const TAX_SERVICES_UPDATE = "TAX_SERVICES_UPDATE";
    /**
     * The webhook topic for `themes/create` events. Occurs whenever a theme is created. Does not occur when theme files are created. Requires the `read_themes` scope.
     */
    const THEMES_CREATE = "THEMES_CREATE";
    /**
     * The webhook topic for `themes/delete` events. Occurs whenever a theme is deleted. Does not occur when theme files are deleted. Requires the `read_themes` scope.
     */
    const THEMES_DELETE = "THEMES_DELETE";
    /**
     * The webhook topic for `themes/publish` events. Occurs whenever a theme with the main or mobile (deprecated) role is published. Requires the `read_themes` scope.
     */
    const THEMES_PUBLISH = "THEMES_PUBLISH";
    /**
     * The webhook topic for `themes/update` events. Occurs whenever a theme is updated. Does not occur when theme files are updated. Requires the `read_themes` scope.
     */
    const THEMES_UPDATE = "THEMES_UPDATE";
    /**
     * The webhook topic for `variants/in_stock` events. Occurs whenever a variant becomes in stock. Online channels receive this webhook only when the variant becomes in stock online. Requires the `read_products` scope.
     */
    const VARIANTS_IN_STOCK = "VARIANTS_IN_STOCK";
    /**
     * The webhook topic for `variants/out_of_stock` events. Occurs whenever a variant becomes out of stock. Online channels receive this webhook only when the variant becomes out of stock online. Requires the `read_products` scope.
     */
    const VARIANTS_OUT_OF_STOCK = "VARIANTS_OUT_OF_STOCK";
    /**
     * The webhook topic for `inventory_levels/connect` events. Occurs whenever an inventory level is connected. Requires the `read_inventory` scope.
     */
    const INVENTORY_LEVELS_CONNECT = "INVENTORY_LEVELS_CONNECT";
    /**
     * The webhook topic for `inventory_levels/update` events. Occurs whenever an inventory level is updated. Requires the `read_inventory` scope.
     */
    const INVENTORY_LEVELS_UPDATE = "INVENTORY_LEVELS_UPDATE";
    /**
     * The webhook topic for `inventory_levels/disconnect` events. Occurs whenever an inventory level is disconnected. Requires the `read_inventory` scope.
     */
    const INVENTORY_LEVELS_DISCONNECT = "INVENTORY_LEVELS_DISCONNECT";
    /**
     * The webhook topic for `inventory_items/create` events. Occurs whenever an inventory item is created. Requires at least one of the following scopes: read_inventory, read_products.
     */
    const INVENTORY_ITEMS_CREATE = "INVENTORY_ITEMS_CREATE";
    /**
     * The webhook topic for `inventory_items/update` events. Occurs whenever an inventory item is updated. Requires at least one of the following scopes: read_inventory, read_products.
     */
    const INVENTORY_ITEMS_UPDATE = "INVENTORY_ITEMS_UPDATE";
    /**
     * The webhook topic for `inventory_items/delete` events. Occurs whenever an inventory item is deleted. Requires at least one of the following scopes: read_inventory, read_products.
     */
    const INVENTORY_ITEMS_DELETE = "INVENTORY_ITEMS_DELETE";
    /**
     * The webhook topic for `locations/activate` events. Occurs whenever a deactivated location is re-activated. Requires the `read_locations` scope.
     */
    const LOCATIONS_ACTIVATE = "LOCATIONS_ACTIVATE";
    /**
     * The webhook topic for `locations/deactivate` events. Occurs whenever a location is deactivated. Requires the `read_locations` scope.
     */
    const LOCATIONS_DEACTIVATE = "LOCATIONS_DEACTIVATE";
    /**
     * The webhook topic for `locations/create` events. Occurs whenever a location is created. Requires the `read_locations` scope.
     */
    const LOCATIONS_CREATE = "LOCATIONS_CREATE";
    /**
     * The webhook topic for `locations/update` events. Occurs whenever a location is updated. Requires the `read_locations` scope.
     */
    const LOCATIONS_UPDATE = "LOCATIONS_UPDATE";
    /**
     * The webhook topic for `locations/delete` events. Occurs whenever a location is deleted. Requires the `read_locations` scope.
     */
    const LOCATIONS_DELETE = "LOCATIONS_DELETE";
    /**
     * The webhook topic for `tender_transactions/create` events. Occurs when a tender transaction is created. Requires the `read_orders` scope.
     */
    const TENDER_TRANSACTIONS_CREATE = "TENDER_TRANSACTIONS_CREATE";
    /**
     * The webhook topic for `app_purchases_one_time/update` events. Occurs whenever a one-time app charge is updated.
     */
    const APP_PURCHASES_ONE_TIME_UPDATE = "APP_PURCHASES_ONE_TIME_UPDATE";
    /**
     * The webhook topic for `app_subscriptions/approaching_capped_amount` events. Occurs when the balance used on an app subscription crosses 90% of the capped amount.
     */
    const APP_SUBSCRIPTIONS_APPROACHING_CAPPED_AMOUNT = "APP_SUBSCRIPTIONS_APPROACHING_CAPPED_AMOUNT";
    /**
     * The webhook topic for `app_subscriptions/update` events. Occurs whenever an app subscription is updated.
     */
    const APP_SUBSCRIPTIONS_UPDATE = "APP_SUBSCRIPTIONS_UPDATE";
    /**
     * The webhook topic for `locales/create` events. Occurs whenever a shop locale is created Requires the `read_locales` scope.
     */
    const LOCALES_CREATE = "LOCALES_CREATE";
    /**
     * The webhook topic for `locales/update` events. Occurs whenever a shop locale is updated, such as published or unpublished Requires the `read_locales` scope.
     */
    const LOCALES_UPDATE = "LOCALES_UPDATE";
    /**
     * The webhook topic for `locales/destroy` events. Occurs whenever a shop locale is destroyed Requires the `read_locales` scope.
     */
    const LOCALES_DESTROY = "LOCALES_DESTROY";
    /**
     * The webhook topic for `machine_translation_batch/completed` events. Occurs when a whole-shop machine translation batch completes.
     */
    const MACHINE_TRANSLATION_BATCH_COMPLETED = "MACHINE_TRANSLATION_BATCH_COMPLETED";
    /**
     * The webhook topic for `domains/create` events. Occurs whenever a domain is created.
     */
    const DOMAINS_CREATE = "DOMAINS_CREATE";
    /**
     * The webhook topic for `domains/update` events. Occurs whenever a domain is updated.
     */
    const DOMAINS_UPDATE = "DOMAINS_UPDATE";
    /**
     * The webhook topic for `domains/destroy` events. Occurs whenever a domain is destroyed.
     */
    const DOMAINS_DESTROY = "DOMAINS_DESTROY";
    /**
     * The webhook topic for `subscription_contracts/create` events. Occurs whenever a subscription contract is created. Requires the `read_own_subscription_contracts` scope.
     */
    const SUBSCRIPTION_CONTRACTS_CREATE = "SUBSCRIPTION_CONTRACTS_CREATE";
    /**
     * The webhook topic for `subscription_contracts/update` events. Occurs whenever a subscription contract is updated. Requires the `read_own_subscription_contracts` scope.
     */
    const SUBSCRIPTION_CONTRACTS_UPDATE = "SUBSCRIPTION_CONTRACTS_UPDATE";
    /**
     * The webhook topic for `subscription_billing_cycle_edits/create` events. Occurs whenever a subscription contract billing cycle is edited. Requires the `read_own_subscription_contracts` scope.
     */
    const SUBSCRIPTION_BILLING_CYCLE_EDITS_CREATE = "SUBSCRIPTION_BILLING_CYCLE_EDITS_CREATE";
    /**
     * The webhook topic for `subscription_billing_cycle_edits/update` events. Occurs whenever a subscription contract billing cycle edit is updated. Requires the `read_own_subscription_contracts` scope.
     */
    const SUBSCRIPTION_BILLING_CYCLE_EDITS_UPDATE = "SUBSCRIPTION_BILLING_CYCLE_EDITS_UPDATE";
    /**
     * The webhook topic for `subscription_billing_cycle_edits/delete` events. Occurs whenever a subscription contract billing cycle edit is deleted. Requires the `read_own_subscription_contracts` scope.
     */
    const SUBSCRIPTION_BILLING_CYCLE_EDITS_DELETE = "SUBSCRIPTION_BILLING_CYCLE_EDITS_DELETE";
    /**
     * The webhook topic for `profiles/create` events. Occurs whenever a delivery profile is created Requires at least one of the following scopes: read_shipping, read_assigned_shipping.
     */
    const PROFILES_CREATE = "PROFILES_CREATE";
    /**
     * The webhook topic for `profiles/update` events. Occurs whenever a delivery profile is updated Requires at least one of the following scopes: read_shipping, read_assigned_shipping.
     */
    const PROFILES_UPDATE = "PROFILES_UPDATE";
    /**
     * The webhook topic for `profiles/delete` events. Occurs whenever a delivery profile is deleted Requires at least one of the following scopes: read_shipping, read_assigned_shipping.
     */
    const PROFILES_DELETE = "PROFILES_DELETE";
    /**
     * The webhook topic for `subscription_billing_attempts/success` events. Occurs whenever a subscription billing attempt succeeds. Requires the `read_own_subscription_contracts` scope.
     */
    const SUBSCRIPTION_BILLING_ATTEMPTS_SUCCESS = "SUBSCRIPTION_BILLING_ATTEMPTS_SUCCESS";
    /**
     * The webhook topic for `subscription_billing_attempts/failure` events. Occurs whenever a subscription billing attempt fails. Requires the `read_own_subscription_contracts` scope.
     */
    const SUBSCRIPTION_BILLING_ATTEMPTS_FAILURE = "SUBSCRIPTION_BILLING_ATTEMPTS_FAILURE";
    /**
     * The webhook topic for `subscription_billing_attempts/challenged` events. Occurs when the financial institution challenges the subscription billing attempt charge as per 3D Secure. Requires the `read_own_subscription_contracts` scope.
     */
    const SUBSCRIPTION_BILLING_ATTEMPTS_CHALLENGED = "SUBSCRIPTION_BILLING_ATTEMPTS_CHALLENGED";
    /**
     * The webhook topic for `returns/cancel` events. Occurs whenever a return is canceled. Requires at least one of the following scopes: read_orders, read_marketplace_orders, read_returns, read_marketplace_returns, read_buyer_membership_orders.
     */
    const RETURNS_CANCEL = "RETURNS_CANCEL";
    /**
     * The webhook topic for `returns/close` events. Occurs whenever a return is closed. Requires at least one of the following scopes: read_orders, read_marketplace_orders, read_returns, read_marketplace_returns, read_buyer_membership_orders.
     */
    const RETURNS_CLOSE = "RETURNS_CLOSE";
    /**
     * The webhook topic for `returns/reopen` events. Occurs whenever a closed return is reopened. Requires at least one of the following scopes: read_orders, read_marketplace_orders, read_returns, read_marketplace_returns, read_buyer_membership_orders.
     */
    const RETURNS_REOPEN = "RETURNS_REOPEN";
    /**
     * The webhook topic for `returns/request` events. Occurs whenever a return is requested. This means `Return.status` is `REQUESTED`. Requires at least one of the following scopes: read_returns, read_marketplace_returns, read_buyer_membership_orders.
     */
    const RETURNS_REQUEST = "RETURNS_REQUEST";
    /**
     * The webhook topic for `returns/approve` events. Occurs whenever a return is approved. This means `Return.status` is `OPEN`. Requires at least one of the following scopes: read_returns, read_marketplace_returns, read_buyer_membership_orders.
     */
    const RETURNS_APPROVE = "RETURNS_APPROVE";
    /**
     * The webhook topic for `returns/update` events. Occurs whenever a return is updated. Requires at least one of the following scopes: read_returns, read_marketplace_returns, read_buyer_membership_orders.
     */
    const RETURNS_UPDATE = "RETURNS_UPDATE";
    /**
     * The webhook topic for `returns/process` events. Occurs whenever a return is processed. Requires at least one of the following scopes: read_returns, read_marketplace_returns, read_buyer_membership_orders.
     */
    const RETURNS_PROCESS = "RETURNS_PROCESS";
    /**
     * The webhook topic for `returns/decline` events. Occurs whenever a return is declined. This means `Return.status` is `DECLINED`. Requires at least one of the following scopes: read_returns, read_marketplace_returns, read_buyer_membership_orders.
     */
    const RETURNS_DECLINE = "RETURNS_DECLINE";
    /**
     * The webhook topic for `reverse_deliveries/attach_deliverable` events. Occurs whenever a deliverable is attached to a reverse delivery.
     * This occurs when a reverse delivery is created or updated with delivery metadata.
     * Metadata includes the delivery method, label, and tracking information associated with a reverse delivery.
     *  Requires at least one of the following scopes: read_returns, read_marketplace_returns.
     */
    const REVERSE_DELIVERIES_ATTACH_DELIVERABLE = "REVERSE_DELIVERIES_ATTACH_DELIVERABLE";
    /**
     * The webhook topic for `reverse_fulfillment_orders/dispose` events. Occurs whenever a disposition is made on a reverse fulfillment order.
     * This includes dispositions made on reverse deliveries that are associated with the reverse fulfillment order.
     *  Requires at least one of the following scopes: read_returns, read_marketplace_returns.
     */
    const REVERSE_FULFILLMENT_ORDERS_DISPOSE = "REVERSE_FULFILLMENT_ORDERS_DISPOSE";
    /**
     * The webhook topic for `payment_terms/create` events. Occurs whenever payment terms are created. Requires the `read_payment_terms` scope.
     */
    const PAYMENT_TERMS_CREATE = "PAYMENT_TERMS_CREATE";
    /**
     * The webhook topic for `payment_terms/delete` events. Occurs whenever payment terms are deleted. Requires the `read_payment_terms` scope.
     */
    const PAYMENT_TERMS_DELETE = "PAYMENT_TERMS_DELETE";
    /**
     * The webhook topic for `payment_terms/update` events. Occurs whenever payment terms are updated. Requires the `read_payment_terms` scope.
     */
    const PAYMENT_TERMS_UPDATE = "PAYMENT_TERMS_UPDATE";
    /**
     * The webhook topic for `payment_schedules/due` events. Occurs whenever payment schedules are due. Requires the `read_payment_terms` scope.
     */
    const PAYMENT_SCHEDULES_DUE = "PAYMENT_SCHEDULES_DUE";
    /**
     * The webhook topic for `selling_plan_groups/create` events. Notifies when a SellingPlanGroup is created. Requires the `read_products` scope.
     */
    const SELLING_PLAN_GROUPS_CREATE = "SELLING_PLAN_GROUPS_CREATE";
    /**
     * The webhook topic for `selling_plan_groups/update` events. Notifies when a SellingPlanGroup is updated. Requires the `read_products` scope.
     */
    const SELLING_PLAN_GROUPS_UPDATE = "SELLING_PLAN_GROUPS_UPDATE";
    /**
     * The webhook topic for `selling_plan_groups/delete` events. Notifies when a SellingPlanGroup is deleted. Requires the `read_products` scope.
     */
    const SELLING_PLAN_GROUPS_DELETE = "SELLING_PLAN_GROUPS_DELETE";
    /**
     * The webhook topic for `bulk_operations/finish` events. Notifies when a Bulk Operation finishes.
     */
    const BULK_OPERATIONS_FINISH = "BULK_OPERATIONS_FINISH";
    /**
     * The webhook topic for `product_feeds/create` events. Triggers when product feed is created Requires the `read_product_listings` scope.
     */
    const PRODUCT_FEEDS_CREATE = "PRODUCT_FEEDS_CREATE";
    /**
     * The webhook topic for `product_feeds/update` events. Triggers when product feed is updated Requires the `read_product_listings` scope.
     */
    const PRODUCT_FEEDS_UPDATE = "PRODUCT_FEEDS_UPDATE";
    /**
     * The webhook topic for `product_feeds/incremental_sync` events. Occurs whenever a product publication is created, updated or removed for a product feed Requires the `read_product_listings` scope.
     */
    const PRODUCT_FEEDS_INCREMENTAL_SYNC = "PRODUCT_FEEDS_INCREMENTAL_SYNC";
    /**
     * The webhook topic for `product_feeds/full_sync` events. Triggers when a full sync for a product feed is performed Requires the `read_product_listings` scope.
     */
    const PRODUCT_FEEDS_FULL_SYNC = "PRODUCT_FEEDS_FULL_SYNC";
    /**
     * The webhook topic for `product_feeds/full_sync_finish` events. Triggers when a full sync finishes Requires the `read_product_listings` scope.
     */
    const PRODUCT_FEEDS_FULL_SYNC_FINISH = "PRODUCT_FEEDS_FULL_SYNC_FINISH";
    /**
     * The webhook topic for `markets/create` events. Occurs when a new market is created. Requires the `read_markets` scope.
     */
    const MARKETS_CREATE = "MARKETS_CREATE";
    /**
     * The webhook topic for `markets/update` events. Occurs when a market is updated. Requires the `read_markets` scope.
     */
    const MARKETS_UPDATE = "MARKETS_UPDATE";
    /**
     * The webhook topic for `markets/delete` events. Occurs when a market is deleted. Requires the `read_markets` scope.
     */
    const MARKETS_DELETE = "MARKETS_DELETE";
    /**
     * The webhook topic for `orders/risk_assessment_changed` events. Triggers when a new risk assessment is available on the order.
     * This can be the first or a subsequent risk assessment.
     * New risk assessments can be provided until the order is marked as fulfilled.
     * Includes the risk level, risk facts, the provider and the order ID.
     * When the provider is Shopify, that field is null.
     * Does not include the risk recommendation for the order.
     * The Shop ID is available in the headers.
     *  Requires the `read_orders` scope.
     */
    const ORDERS_RISK_ASSESSMENT_CHANGED = "ORDERS_RISK_ASSESSMENT_CHANGED";
    /**
     * The webhook topic for `orders/shopify_protect_eligibility_changed` events. Occurs whenever Shopify Protect's eligibility for an order is changed. Requires the `read_orders` scope.
     */
    const ORDERS_SHOPIFY_PROTECT_ELIGIBILITY_CHANGED = "ORDERS_SHOPIFY_PROTECT_ELIGIBILITY_CHANGED";
    /**
     * The webhook topic for `finance_kyc_information/update` events. Occurs whenever shop's finance KYC information was updated Requires the `read_financial_kyc_information` scope.
     */
    const FINANCE_KYC_INFORMATION_UPDATE = "FINANCE_KYC_INFORMATION_UPDATE";
    /**
     * The webhook topic for `fulfillment_orders/rescheduled` events. Triggers when a fulfillment order is rescheduled.
     *
     * Fulfillment orders may be merged if they have the same `fulfillAt` datetime.
     * If the fulfillment order is merged then the resulting fulfillment order will be indicated in the webhook body.
     * Otherwise it will be the original fulfillment order with an updated `fulfill_at` datetime.
     *  Requires at least one of the following scopes: read_merchant_managed_fulfillment_orders, read_assigned_fulfillment_orders, read_third_party_fulfillment_orders, read_marketplace_fulfillment_orders.
     */
    const FULFILLMENT_ORDERS_RESCHEDULED = "FULFILLMENT_ORDERS_RESCHEDULED";
    /**
     * The webhook topic for `publications/delete` events. Occurs whenever a publication is deleted. Requires the `read_publications` scope.
     */
    const PUBLICATIONS_DELETE = "PUBLICATIONS_DELETE";
    /**
     * The webhook topic for `audit_events/admin_api_activity` events. Triggers for each auditable Admin API request. This topic is limited to one active subscription per Plus store and requires the use of Google Cloud Pub/Sub or AWS EventBridge. Requires the `read_audit_events` scope.
     */
    const AUDIT_EVENTS_ADMIN_API_ACTIVITY = "AUDIT_EVENTS_ADMIN_API_ACTIVITY";
    /**
     * The webhook topic for `fulfillment_orders/line_items_prepared_for_pickup` events. Triggers when one or more of the line items for a fulfillment order are prepared for pickup Requires at least one of the following scopes: read_merchant_managed_fulfillment_orders, read_assigned_fulfillment_orders, read_third_party_fulfillment_orders, read_marketplace_fulfillment_orders.
     */
    const FULFILLMENT_ORDERS_LINE_ITEMS_PREPARED_FOR_PICKUP = "FULFILLMENT_ORDERS_LINE_ITEMS_PREPARED_FOR_PICKUP";
    /**
     * The webhook topic for `companies/create` events. Occurs whenever a company is created. Requires at least one of the following scopes: read_customers, read_companies.
     */
    const COMPANIES_CREATE = "COMPANIES_CREATE";
    /**
     * The webhook topic for `companies/update` events. Occurs whenever a company is updated. Requires at least one of the following scopes: read_customers, read_companies.
     */
    const COMPANIES_UPDATE = "COMPANIES_UPDATE";
    /**
     * The webhook topic for `companies/delete` events. Occurs whenever a company is deleted. Requires at least one of the following scopes: read_customers, read_companies.
     */
    const COMPANIES_DELETE = "COMPANIES_DELETE";
    /**
     * The webhook topic for `company_locations/create` events. Occurs whenever a company location is created. Requires at least one of the following scopes: read_customers, read_companies.
     */
    const COMPANY_LOCATIONS_CREATE = "COMPANY_LOCATIONS_CREATE";
    /**
     * The webhook topic for `company_locations/update` events. Occurs whenever a company location is updated. Requires at least one of the following scopes: read_customers, read_companies.
     */
    const COMPANY_LOCATIONS_UPDATE = "COMPANY_LOCATIONS_UPDATE";
    /**
     * The webhook topic for `company_locations/delete` events. Occurs whenever a company location is deleted. Requires at least one of the following scopes: read_customers, read_companies.
     */
    const COMPANY_LOCATIONS_DELETE = "COMPANY_LOCATIONS_DELETE";
    /**
     * The webhook topic for `company_contacts/create` events. Occurs whenever a company contact is created. Requires at least one of the following scopes: read_customers, read_companies.
     */
    const COMPANY_CONTACTS_CREATE = "COMPANY_CONTACTS_CREATE";
    /**
     * The webhook topic for `company_contacts/update` events. Occurs whenever a company contact is updated. Requires at least one of the following scopes: read_customers, read_companies.
     */
    const COMPANY_CONTACTS_UPDATE = "COMPANY_CONTACTS_UPDATE";
    /**
     * The webhook topic for `company_contacts/delete` events. Occurs whenever a company contact is deleted. Requires at least one of the following scopes: read_customers, read_companies.
     */
    const COMPANY_CONTACTS_DELETE = "COMPANY_CONTACTS_DELETE";
    /**
     * The webhook topic for `customers/merge` events. Triggers when two customers are merged Requires the `read_customer_merge` scope.
     */
    const CUSTOMERS_MERGE = "CUSTOMERS_MERGE";
    /**
     * The webhook topic for `inventory_transfers/add_items` events. Occurs any time items are added to a transfer. Requires the `read_inventory_transfers` scope.
     */
    const INVENTORY_TRANSFERS_ADD_ITEMS = "INVENTORY_TRANSFERS_ADD_ITEMS";
    /**
     * The webhook topic for `inventory_transfers/update_item_quantities` events. Occurs whenever the quantity of transfer line items changes. Requires the `read_inventory_transfers` scope.
     */
    const INVENTORY_TRANSFERS_UPDATE_ITEM_QUANTITIES = "INVENTORY_TRANSFERS_UPDATE_ITEM_QUANTITIES";
    /**
     * The webhook topic for `inventory_transfers/remove_items` events. Occurs any time items are removed from a transfer. Requires the `read_inventory_transfers` scope.
     */
    const INVENTORY_TRANSFERS_REMOVE_ITEMS = "INVENTORY_TRANSFERS_REMOVE_ITEMS";
    /**
     * The webhook topic for `inventory_transfers/ready_to_ship` events. Triggers when a transfer is marked as ready to ship. Requires the `read_inventory_transfers` scope.
     */
    const INVENTORY_TRANSFERS_READY_TO_SHIP = "INVENTORY_TRANSFERS_READY_TO_SHIP";
    /**
     * The webhook topic for `inventory_transfers/cancel` events. Triggers when a transfer is canceled. Requires the `read_inventory_transfers` scope.
     */
    const INVENTORY_TRANSFERS_CANCEL = "INVENTORY_TRANSFERS_CANCEL";
    /**
     * The webhook topic for `inventory_transfers/complete` events. Triggers when a transfer is completed. Requires the `read_inventory_transfers` scope.
     */
    const INVENTORY_TRANSFERS_COMPLETE = "INVENTORY_TRANSFERS_COMPLETE";
    /**
     * The webhook topic for `inventory_shipments/delete` events. Triggers when a shipment is deleted. Requires the `read_inventory_shipments` scope.
     */
    const INVENTORY_SHIPMENTS_DELETE = "INVENTORY_SHIPMENTS_DELETE";
    /**
     * The webhook topic for `inventory_shipments/create` events. Triggers when a shipment is created. Requires the `read_inventory_shipments` scope.
     */
    const INVENTORY_SHIPMENTS_CREATE = "INVENTORY_SHIPMENTS_CREATE";
    /**
     * The webhook topic for `inventory_shipments/mark_in_transit` events. Triggers when a shipment is marked as in transit. Requires the `read_inventory_shipments` scope.
     */
    const INVENTORY_SHIPMENTS_MARK_IN_TRANSIT = "INVENTORY_SHIPMENTS_MARK_IN_TRANSIT";
    /**
     * The webhook topic for `inventory_shipments/update_tracking` events. Triggers when tracking info on a shipment is updated. Requires the `read_inventory_shipments` scope.
     */
    const INVENTORY_SHIPMENTS_UPDATE_TRACKING = "INVENTORY_SHIPMENTS_UPDATE_TRACKING";
    /**
     * The webhook topic for `inventory_shipments/add_items` events. Occurs whenever items are added to a shipment. Requires the `read_inventory_shipments` scope.
     */
    const INVENTORY_SHIPMENTS_ADD_ITEMS = "INVENTORY_SHIPMENTS_ADD_ITEMS";
    /**
     * The webhook topic for `inventory_shipments/update_item_quantities` events. Occurs whenever quantities change on a shipment. Requires the `read_inventory_shipments` scope.
     */
    const INVENTORY_SHIPMENTS_UPDATE_ITEM_QUANTITIES = "INVENTORY_SHIPMENTS_UPDATE_ITEM_QUANTITIES";
    /**
     * The webhook topic for `inventory_shipments/remove_items` events. Occurs whenever items are removed from a shipment. Requires the `read_inventory_shipments` scope.
     */
    const INVENTORY_SHIPMENTS_REMOVE_ITEMS = "INVENTORY_SHIPMENTS_REMOVE_ITEMS";
    /**
     * The webhook topic for `inventory_shipments/receive_items` events. Triggers when items on a shipment are received. Requires the `read_inventory_shipments_received_items` scope.
     */
    const INVENTORY_SHIPMENTS_RECEIVE_ITEMS = "INVENTORY_SHIPMENTS_RECEIVE_ITEMS";
    /**
     * The webhook topic for `customer_account_settings/update` events. Triggers when merchants change customer account setting.
     */
    const CUSTOMER_ACCOUNT_SETTINGS_UPDATE = "CUSTOMER_ACCOUNT_SETTINGS_UPDATE";
    /**
     * The webhook topic for `customer.joined_segment` events. Triggers when a customer joins a segment. Requires the `read_customers` scope.
     */
    const CUSTOMER_JOINED_SEGMENT = "CUSTOMER_JOINED_SEGMENT";
    /**
     * The webhook topic for `customer.left_segment` events. Triggers when a customer leaves a segment. Requires the `read_customers` scope.
     */
    const CUSTOMER_LEFT_SEGMENT = "CUSTOMER_LEFT_SEGMENT";
    /**
     * The webhook topic for `company_contact_roles/assign` events. Occurs whenever a role is assigned to a contact at a location. Requires at least one of the following scopes: read_customers, read_companies.
     */
    const COMPANY_CONTACT_ROLES_ASSIGN = "COMPANY_CONTACT_ROLES_ASSIGN";
    /**
     * The webhook topic for `company_contact_roles/revoke` events. Occurs whenever a role is revoked from a contact at a location. Requires at least one of the following scopes: read_customers, read_companies.
     */
    const COMPANY_CONTACT_ROLES_REVOKE = "COMPANY_CONTACT_ROLES_REVOKE";
    /**
     * The webhook topic for `subscription_contracts/activate` events. Occurs when a subscription contract is activated. Requires the `read_own_subscription_contracts` scope.
     */
    const SUBSCRIPTION_CONTRACTS_ACTIVATE = "SUBSCRIPTION_CONTRACTS_ACTIVATE";
    /**
     * The webhook topic for `subscription_contracts/pause` events. Occurs when a subscription contract is paused. Requires the `read_own_subscription_contracts` scope.
     */
    const SUBSCRIPTION_CONTRACTS_PAUSE = "SUBSCRIPTION_CONTRACTS_PAUSE";
    /**
     * The webhook topic for `subscription_contracts/cancel` events. Occurs when a subscription contract is canceled. Requires the `read_own_subscription_contracts` scope.
     */
    const SUBSCRIPTION_CONTRACTS_CANCEL = "SUBSCRIPTION_CONTRACTS_CANCEL";
    /**
     * The webhook topic for `subscription_contracts/fail` events. Occurs when a subscription contract is failed. Requires the `read_own_subscription_contracts` scope.
     */
    const SUBSCRIPTION_CONTRACTS_FAIL = "SUBSCRIPTION_CONTRACTS_FAIL";
    /**
     * The webhook topic for `subscription_contracts/expire` events. Occurs when a subscription contract expires. Requires the `read_own_subscription_contracts` scope.
     */
    const SUBSCRIPTION_CONTRACTS_EXPIRE = "SUBSCRIPTION_CONTRACTS_EXPIRE";
    /**
     * The webhook topic for `subscription_billing_cycles/skip` events. Occurs whenever a subscription contract billing cycle is skipped. Requires the `read_own_subscription_contracts` scope.
     */
    const SUBSCRIPTION_BILLING_CYCLES_SKIP = "SUBSCRIPTION_BILLING_CYCLES_SKIP";
    /**
     * The webhook topic for `subscription_billing_cycles/unskip` events. Occurs whenever a subscription contract billing cycle is unskipped. Requires the `read_own_subscription_contracts` scope.
     */
    const SUBSCRIPTION_BILLING_CYCLES_UNSKIP = "SUBSCRIPTION_BILLING_CYCLES_UNSKIP";
    /**
     * The webhook topic for `metaobjects/create` events. Occurs when a metaobject is created. Requires the `read_metaobjects` scope.
     */
    const METAOBJECTS_CREATE = "METAOBJECTS_CREATE";
    /**
     * The webhook topic for `metaobjects/update` events. Occurs when a metaobject is updated. Requires the `read_metaobjects` scope.
     */
    const METAOBJECTS_UPDATE = "METAOBJECTS_UPDATE";
    /**
     * The webhook topic for `metaobjects/delete` events. Occurs when a metaobject is deleted. Requires the `read_metaobjects` scope.
     */
    const METAOBJECTS_DELETE = "METAOBJECTS_DELETE";
    /**
     * The webhook topic for `finance_app_staff_member/grant` events. Triggers when a staff is granted access to all or some finance app. Requires the `read_financial_kyc_information` scope.
     */
    const FINANCE_APP_STAFF_MEMBER_GRANT = "FINANCE_APP_STAFF_MEMBER_GRANT";
    /**
     * The webhook topic for `finance_app_staff_member/revoke` events. Triggers when a staff's access to all or some finance app has been revoked. Requires the `read_financial_kyc_information` scope.
     */
    const FINANCE_APP_STAFF_MEMBER_REVOKE = "FINANCE_APP_STAFF_MEMBER_REVOKE";
    /**
     * The webhook topic for `finance_app_staff_member/delete` events. Triggers when a staff with access to all or some finance app has been removed. Requires the `read_financial_kyc_information` scope.
     */
    const FINANCE_APP_STAFF_MEMBER_DELETE = "FINANCE_APP_STAFF_MEMBER_DELETE";
    /**
     * The webhook topic for `finance_app_staff_member/update` events. Triggers when a staff's information has been updated. Requires the `read_financial_kyc_information` scope.
     */
    const FINANCE_APP_STAFF_MEMBER_UPDATE = "FINANCE_APP_STAFF_MEMBER_UPDATE";
    /**
     * The webhook topic for `discounts/create` events. Occurs whenever a discount is created. Requires the `read_discounts` scope.
     */
    const DISCOUNTS_CREATE = "DISCOUNTS_CREATE";
    /**
     * The webhook topic for `discounts/update` events. Occurs whenever a discount is updated. Requires the `read_discounts` scope.
     */
    const DISCOUNTS_UPDATE = "DISCOUNTS_UPDATE";
    /**
     * The webhook topic for `discounts/delete` events. Occurs whenever a discount is deleted. Requires the `read_discounts` scope.
     */
    const DISCOUNTS_DELETE = "DISCOUNTS_DELETE";
    /**
     * The webhook topic for `discounts/redeemcode_added` events. Occurs whenever a redeem code is added to a code discount. Requires the `read_discounts` scope.
     */
    const DISCOUNTS_REDEEMCODE_ADDED = "DISCOUNTS_REDEEMCODE_ADDED";
    /**
     * The webhook topic for `discounts/redeemcode_removed` events. Occurs whenever a redeem code on a code discount is deleted. Requires the `read_discounts` scope.
     */
    const DISCOUNTS_REDEEMCODE_REMOVED = "DISCOUNTS_REDEEMCODE_REMOVED";
    /**
     * The webhook topic for `metafield_definitions/create` events. Occurs when a metafield definition is created. Requires the `read_content` scope.
     */
    const METAFIELD_DEFINITIONS_CREATE = "METAFIELD_DEFINITIONS_CREATE";
    /**
     * The webhook topic for `metafield_definitions/update` events. Occurs when a metafield definition is updated. Requires the `read_content` scope.
     */
    const METAFIELD_DEFINITIONS_UPDATE = "METAFIELD_DEFINITIONS_UPDATE";
    /**
     * The webhook topic for `metafield_definitions/delete` events. Occurs when a metafield definition is deleted. Requires the `read_content` scope.
     */
    const METAFIELD_DEFINITIONS_DELETE = "METAFIELD_DEFINITIONS_DELETE";
    /**
     * The webhook topic for `delivery_promise_settings/update` events. Occurs when a promise setting is updated. Requires the `read_shipping` scope.
     */
    const DELIVERY_PROMISE_SETTINGS_UPDATE = "DELIVERY_PROMISE_SETTINGS_UPDATE";
    /**
     * The webhook topic for `markets_backup_region/update` events. Occurs when a backup region is updated. Requires the `read_markets` scope.
     */
    const MARKETS_BACKUP_REGION_UPDATE = "MARKETS_BACKUP_REGION_UPDATE";
    /**
     * The webhook topic for `checkout_and_accounts_configurations/update` events. The event occurs whenever a published checkout and account configuration is updated.
     */
    const CHECKOUT_AND_ACCOUNTS_CONFIGURATIONS_UPDATE = "CHECKOUT_AND_ACCOUNTS_CONFIGURATIONS_UPDATE";
}
