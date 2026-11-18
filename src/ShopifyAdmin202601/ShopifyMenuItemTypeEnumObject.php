<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * A menu item type.
 */
class ShopifyMenuItemTypeEnumObject extends EnumObject
{
    /**
     * The frontpage menu item type.
     */
    const FRONTPAGE = "FRONTPAGE";
    /**
     * The collection menu item type.
     */
    const COLLECTION = "COLLECTION";
    /**
     * The collections menu item type.
     */
    const COLLECTIONS = "COLLECTIONS";
    /**
     * The product menu item type.
     */
    const PRODUCT = "PRODUCT";
    /**
     * The catalog menu item type.
     */
    const CATALOG = "CATALOG";
    /**
     * The page menu item type.
     */
    const PAGE = "PAGE";
    /**
     * The blog menu item type.
     */
    const BLOG = "BLOG";
    /**
     * The article menu item type.
     */
    const ARTICLE = "ARTICLE";
    /**
     * The search menu item type.
     */
    const SEARCH = "SEARCH";
    /**
     * The shop_policy menu item type.
     */
    const SHOP_POLICY = "SHOP_POLICY";
    /**
     * The http menu item type.
     */
    const HTTP = "HTTP";
    /**
     * The metaobject menu item type.
     */
    const METAOBJECT = "METAOBJECT";
    /**
     * The customer_account_page menu item type.
     */
    const CUSTOMER_ACCOUNT_PAGE = "CUSTOMER_ACCOUNT_PAGE";
}
