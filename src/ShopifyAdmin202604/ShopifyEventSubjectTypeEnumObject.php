<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The type of the resource that generated the event.
 */
class ShopifyEventSubjectTypeEnumObject extends EnumObject
{
    /**
     * A CompanyLocation resource generated the event.
     */
    const COMPANY_LOCATION = "COMPANY_LOCATION";
    /**
     * A Company resource generated the event.
     */
    const COMPANY = "COMPANY";
    /**
     * A Customer resource generated the event.
     */
    const CUSTOMER = "CUSTOMER";
    /**
     * A DraftOrder resource generated the event.
     */
    const DRAFT_ORDER = "DRAFT_ORDER";
    /**
     * A InventoryTransfer resource generated the event.
     */
    const INVENTORY_TRANSFER = "INVENTORY_TRANSFER";
    /**
     * A Collection resource generated the event.
     */
    const COLLECTION = "COLLECTION";
    /**
     * A Product resource generated the event.
     */
    const PRODUCT = "PRODUCT";
    /**
     * A ProductVariant resource generated the event.
     */
    const PRODUCT_VARIANT = "PRODUCT_VARIANT";
    /**
     * A Article resource generated the event.
     */
    const ARTICLE = "ARTICLE";
    /**
     * A Blog resource generated the event.
     */
    const BLOG = "BLOG";
    /**
     * A Comment resource generated the event.
     */
    const COMMENT = "COMMENT";
    /**
     * A Page resource generated the event.
     */
    const PAGE = "PAGE";
    /**
     * A DiscountNode resource generated the event.
     */
    const DISCOUNT_NODE = "DISCOUNT_NODE";
    /**
     * A Order resource generated the event.
     */
    const ORDER = "ORDER";
    /**
     * Subject type is not available. This usually means that the subject isn't available in the current
     *         version of the API, using a newer API version may resolve this.
     */
    const UNKNOWN = "UNKNOWN";
}
