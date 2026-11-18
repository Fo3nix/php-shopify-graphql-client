<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Specifies the type of resources that are translatable.
 */
class ShopifyTranslatableResourceTypeEnumObject extends EnumObject
{
    /**
     * A blog post. Translatable fields: `title`, `body_html`, `summary_html`, `handle`, `meta_title`, `meta_description`.
     */
    const ARTICLE = "ARTICLE";
    /**
     * An article image. Translatable fields: `alt`.
     */
    const ARTICLE_IMAGE = "ARTICLE_IMAGE";
    /**
     * A blog. Translatable fields: `title`, `handle`, `meta_title`, `meta_description`.
     */
    const BLOG = "BLOG";
    /**
     * A product collection. Translatable fields: `title`, `body_html`, `handle`, `meta_title`, `meta_description`.
     */
    const COLLECTION = "COLLECTION";
    /**
     * A collection image. Translatable fields: `alt`.
     */
    const COLLECTION_IMAGE = "COLLECTION_IMAGE";
    /**
     * The delivery method definition. For example, "Standard", or "Expedited". Translatable fields: `name`, `description`.
     */
    const DELIVERY_METHOD_DEFINITION = "DELIVERY_METHOD_DEFINITION";
    /**
     * An email template. Translatable fields: `title`, `body_html`.
     */
    const EMAIL_TEMPLATE = "EMAIL_TEMPLATE";
    /**
     * A filter. Translatable fields: `label`.
     */
    const FILTER = "FILTER";
    /**
     * A link to direct users. Translatable fields: `title`.
     */
    const LINK = "LINK";
    /**
     * An image. Translatable fields: `alt`.
     */
    const MEDIA_IMAGE = "MEDIA_IMAGE";
    /**
     * A category of links. Translatable fields: `title`.
     */
    const MENU = "MENU";
    /**
     * A Metaobject. Translatable fields are determined by the Metaobject type.
     */
    const METAOBJECT = "METAOBJECT";
    /**
     * An online store theme. Translatable fields: `dynamic keys based on theme data`.
     */
    const ONLINE_STORE_THEME = "ONLINE_STORE_THEME";
    /**
     * A theme app embed. Translatable fields: `dynamic keys based on theme data`.
     */
    const ONLINE_STORE_THEME_APP_EMBED = "ONLINE_STORE_THEME_APP_EMBED";
    /**
     * A theme json template. Translatable fields: `dynamic keys based on theme data`.
     */
    const ONLINE_STORE_THEME_JSON_TEMPLATE = "ONLINE_STORE_THEME_JSON_TEMPLATE";
    /**
     * Locale file content of an online store theme. Translatable fields: `dynamic keys based on theme data`.
     */
    const ONLINE_STORE_THEME_LOCALE_CONTENT = "ONLINE_STORE_THEME_LOCALE_CONTENT";
    /**
     * A theme json section group. Translatable fields: `dynamic keys based on theme data`.
     */
    const ONLINE_STORE_THEME_SECTION_GROUP = "ONLINE_STORE_THEME_SECTION_GROUP";
    /**
     * A theme setting category. Translatable fields: `dynamic keys based on theme data`.
     */
    const ONLINE_STORE_THEME_SETTINGS_CATEGORY = "ONLINE_STORE_THEME_SETTINGS_CATEGORY";
    /**
     * Shared static sections of an online store theme. Translatable fields: `dynamic keys based on theme data`.
     */
    const ONLINE_STORE_THEME_SETTINGS_DATA_SECTIONS = "ONLINE_STORE_THEME_SETTINGS_DATA_SECTIONS";
    /**
     * A packing slip template. Translatable fields: `body`.
     */
    const PACKING_SLIP_TEMPLATE = "PACKING_SLIP_TEMPLATE";
    /**
     * A page. Translatable fields: `title`, `body_html`, `handle`, `meta_title`, `meta_description`.
     */
    const PAGE = "PAGE";
    /**
     * A payment gateway. Translatable fields: `name`, `message`, `before_payment_instructions`.
     */
    const PAYMENT_GATEWAY = "PAYMENT_GATEWAY";
    /**
     * An online store product. Translatable fields: `title`, `body_html`, `handle`, `product_type`, `meta_title`, `meta_description`.
     */
    const PRODUCT = "PRODUCT";
    /**
     * An online store custom product property name. For example, "Size", "Color", or "Material".
     *         Translatable fields: `name`.
     */
    const PRODUCT_OPTION = "PRODUCT_OPTION";
    /**
     * The product option value names. For example, "Red", "Blue", and "Green" for a "Color" option. Translatable fields: `name`.
     */
    const PRODUCT_OPTION_VALUE = "PRODUCT_OPTION_VALUE";
    /**
     * A selling plan. Translatable fields:`name`, `option1`, `option2`, `option3`, `description`.
     */
    const SELLING_PLAN = "SELLING_PLAN";
    /**
     * A selling plan group. Translatable fields: `name`, `option1`, `option2`, `option3`.
     */
    const SELLING_PLAN_GROUP = "SELLING_PLAN_GROUP";
    /**
     * A shop. Translatable fields: `meta_title`, `meta_description`.
     */
    const SHOP = "SHOP";
    /**
     * A shop policy. Translatable fields: `body`.
     */
    const SHOP_POLICY = "SHOP_POLICY";
}
