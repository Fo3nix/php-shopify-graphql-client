<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Specifies the type of resources to be returned from a search.
 */
class ShopifySearchResultTypeEnumObject extends EnumObject
{
    const CUSTOMER = "CUSTOMER";
    const DRAFT_ORDER = "DRAFT_ORDER";
    /**
     * An inventory transfer.
     */
    const INVENTORY_TRANSFER = "INVENTORY_TRANSFER";
    const PRODUCT = "PRODUCT";
    const COLLECTION = "COLLECTION";
    /**
     * A file.
     */
    const FILE = "FILE";
    /**
     * A page.
     */
    const PAGE = "PAGE";
    /**
     * A blog.
     */
    const BLOG = "BLOG";
    /**
     * An article.
     */
    const ARTICLE = "ARTICLE";
    /**
     * A URL redirect.
     */
    const URL_REDIRECT = "URL_REDIRECT";
    const PRICE_RULE = "PRICE_RULE";
    /**
     * A code discount redeem code.
     */
    const DISCOUNT_REDEEM_CODE = "DISCOUNT_REDEEM_CODE";
    const ORDER = "ORDER";
    /**
     * A balance transaction.
     */
    const BALANCE_TRANSACTION = "BALANCE_TRANSACTION";
}
