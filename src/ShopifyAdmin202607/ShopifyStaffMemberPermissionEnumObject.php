<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Represents access permissions for a staff member.
 */
class ShopifyStaffMemberPermissionEnumObject extends EnumObject
{
    /**
     * The staff member can manage and install apps and channels.
     */
    const APPLICATIONS = "APPLICATIONS";
    /**
     * The staff member can manage and install sales channels.
     */
    const CHANNELS = "CHANNELS";
    /**
     * The staff member can create and edit customers.
     */
    const CREATE_AND_EDIT_CUSTOMERS = "CREATE_AND_EDIT_CUSTOMERS";
    /**
     * The staff member can create and edit gift cards.
     */
    const CREATE_AND_EDIT_GIFT_CARDS = "CREATE_AND_EDIT_GIFT_CARDS";
    /**
     * The staff member can view customers.
     */
    const CUSTOMERS = "CUSTOMERS";
    /**
     * The staff member can view the Shopify Home page, which includes sales information and other shop data.
     */
    const DASHBOARD = "DASHBOARD";
    /**
     * The staff member can deactivate gift cards.
     */
    const DEACTIVATE_GIFT_CARDS = "DEACTIVATE_GIFT_CARDS";
    /**
     * The staff member can delete customers.
     */
    const DELETE_CUSTOMERS = "DELETE_CUSTOMERS";
    /**
     * The staff member can view, buy, and manage domains.
     */
    const DOMAINS = "DOMAINS";
    /**
     * The staff member can create, update, and delete draft orders.
     */
    const DRAFT_ORDERS = "DRAFT_ORDERS";
    /**
     * The staff member can update orders.
     */
    const EDIT_ORDERS = "EDIT_ORDERS";
    /**
     * The staff member can erase customer private data.
     */
    const ERASE_CUSTOMER_DATA = "ERASE_CUSTOMER_DATA";
    /**
     * The staff member can export customers.
     */
    const EXPORT_CUSTOMERS = "EXPORT_CUSTOMERS";
    /**
     * The staff member can export gift cards.
     */
    const EXPORT_GIFT_CARDS = "EXPORT_GIFT_CARDS";
    /**
     * The staff member can view, create, issue, and export gift cards to a CSV file.
     */
    const GIFT_CARDS = "GIFT_CARDS";
    /**
     * The staff member can view and modify links and navigation menus.
     */
    const LINKS = "LINKS";
    /**
     * The staff member can create, update, and delete locations where inventory is stocked or managed.
     */
    const LOCATIONS = "LOCATIONS";
    /**
     * The staff member can view markets.
     */
    const VIEW_MARKETS = "VIEW_MARKETS";
    /**
     * The staff member can create and edit markets.
     */
    const CREATE_AND_EDIT_MARKETS = "CREATE_AND_EDIT_MARKETS";
    /**
     * The staff member can delete markets.
     */
    const DELETE_MARKETS = "DELETE_MARKETS";
    /**
     * The staff member can view and create discount codes and automatic discounts, and export discounts to a CSV file.
     */
    const MARKETING = "MARKETING";
    /**
     * The staff member can view, create, and automate marketing campaigns.
     */
    const MARKETING_SECTION = "MARKETING_SECTION";
    /**
     * The staff member can merge customers.
     */
    const MERGE_CUSTOMERS = "MERGE_CUSTOMERS";
    /**
     * The staff member can view, create, update, delete, and cancel orders, and receive order notifications. The staff member can still create draft orders without this permission.
     */
    const ORDERS = "ORDERS";
    /**
     * The staff member can view the Overview and Live view pages, which include sales information, and other shop and sales channels data.
     */
    const OVERVIEWS = "OVERVIEWS";
    /**
     * The staff member can view, create, update, publish, and delete blog posts and pages.
     */
    const PAGES = "PAGES";
    /**
     * The staff member can pay for an order by using a vaulted card.
     */
    const PAY_ORDERS_BY_VAULTED_CARD = "PAY_ORDERS_BY_VAULTED_CARD";
    /**
     * The staff member can view the preferences and configuration of a shop.
     */
    const PREFERENCES = "PREFERENCES";
    /**
     * The staff member can view, create, import, and update products, collections, and inventory.
     */
    const PRODUCTS = "PRODUCTS";
    /**
     * The staff member can view and create all reports, which includes sales information and other shop data.
     */
    const REPORTS = "REPORTS";
    /**
     * The staff member can request customer private data.
     */
    const REQUEST_CUSTOMER_DATA = "REQUEST_CUSTOMER_DATA";
    /**
     * The staff member can view, update, and publish themes.
     */
    const THEMES = "THEMES";
}
