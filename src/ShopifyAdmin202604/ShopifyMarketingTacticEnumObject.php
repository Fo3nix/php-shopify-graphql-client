<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The available types of tactics for a marketing activity.
 */
class ShopifyMarketingTacticEnumObject extends EnumObject
{
    /**
     * An abandoned cart recovery email.
     */
    const ABANDONED_CART = "ABANDONED_CART";
    /**
     * An ad, such as a Facebook ad.
     */
    const AD = "AD";
    /**
     * An affiliate link.
     */
    const AFFILIATE = "AFFILIATE";
    /**
     * A link.
     */
    const LINK = "LINK";
    /**
     * A loyalty program.
     */
    const LOYALTY = "LOYALTY";
    /**
     * A messaging app, such as Facebook Messenger.
     */
    const MESSAGE = "MESSAGE";
    /**
     * A newsletter.
     */
    const NEWSLETTER = "NEWSLETTER";
    /**
     * A notification in the Shopify admin.
     */
    const NOTIFICATION = "NOTIFICATION";
    /**
     * A blog post.
     */
    const POST = "POST";
    /**
     * A retargeting ad.
     */
    const RETARGETING = "RETARGETING";
    /**
     * A transactional email.
     */
    const TRANSACTIONAL = "TRANSACTIONAL";
    /**
     * A popup on the online store.
     */
    const STOREFRONT_APP = "STOREFRONT_APP";
    /**
     * Search engine optimization.
     */
    const SEO = "SEO";
}
