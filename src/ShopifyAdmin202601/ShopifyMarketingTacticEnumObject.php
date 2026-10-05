<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

class ShopifyMarketingTacticEnumObject extends EnumObject
{
    const ABANDONED_CART = "ABANDONED_CART";
    const AD = "AD";
    const AFFILIATE = "AFFILIATE";
    const LINK = "LINK";
    const LOYALTY = "LOYALTY";
    const MESSAGE = "MESSAGE";
    const NEWSLETTER = "NEWSLETTER";
    const NOTIFICATION = "NOTIFICATION";
    const POST = "POST";
    const RETARGETING = "RETARGETING";
    const TRANSACTIONAL = "TRANSACTIONAL";
    const STOREFRONT_APP = "STOREFRONT_APP";
    const SEO = "SEO";
}
