<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible types of a metafield's owner resource.
 */
class ShopifyMetafieldOwnerTypeEnumObject extends EnumObject
{
    /**
     * The Api Permission metafield owner type.
     */
    const API_PERMISSION = "API_PERMISSION";
    /**
     * The Company metafield owner type.
     */
    const COMPANY = "COMPANY";
    /**
     * The Company Location metafield owner type.
     */
    const COMPANY_LOCATION = "COMPANY_LOCATION";
    /**
     * The Payment Customization metafield owner type.
     */
    const PAYMENT_CUSTOMIZATION = "PAYMENT_CUSTOMIZATION";
    /**
     * The Validation metafield owner type.
     */
    const VALIDATION = "VALIDATION";
    /**
     * The Customer metafield owner type.
     */
    const CUSTOMER = "CUSTOMER";
    /**
     * The Delivery Customization metafield owner type.
     */
    const DELIVERY_CUSTOMIZATION = "DELIVERY_CUSTOMIZATION";
    /**
     * The draft order metafield owner type.
     */
    const DRAFTORDER = "DRAFTORDER";
    /**
     * The GiftCardTransaction metafield owner type.
     */
    const GIFT_CARD_TRANSACTION = "GIFT_CARD_TRANSACTION";
    /**
     * The Market metafield owner type.
     */
    const MARKET = "MARKET";
    /**
     * The Cart Transform metafield owner type.
     */
    const CARTTRANSFORM = "CARTTRANSFORM";
    /**
     * The Collection metafield owner type.
     */
    const COLLECTION = "COLLECTION";
    /**
     * The Product metafield owner type.
     */
    const PRODUCT = "PRODUCT";
    /**
     * The Product Variant metafield owner type.
     */
    const PRODUCTVARIANT = "PRODUCTVARIANT";
    /**
     * The Selling Plan metafield owner type.
     */
    const SELLING_PLAN = "SELLING_PLAN";
    /**
     * The Article metafield owner type.
     */
    const ARTICLE = "ARTICLE";
    /**
     * The Blog metafield owner type.
     */
    const BLOG = "BLOG";
    /**
     * The Page metafield owner type.
     */
    const PAGE = "PAGE";
    /**
     * The Fulfillment Constraint Rule metafield owner type.
     */
    const FULFILLMENT_CONSTRAINT_RULE = "FULFILLMENT_CONSTRAINT_RULE";
    /**
     * The Order Routing Location Rule metafield owner type.
     */
    const ORDER_ROUTING_LOCATION_RULE = "ORDER_ROUTING_LOCATION_RULE";
    /**
     * The Discount metafield owner type.
     */
    const DISCOUNT = "DISCOUNT";
    /**
     * The Order metafield owner type.
     */
    const ORDER = "ORDER";
    /**
     * The Location metafield owner type.
     */
    const LOCATION = "LOCATION";
    /**
     * The Shop metafield owner type.
     */
    const SHOP = "SHOP";
}
