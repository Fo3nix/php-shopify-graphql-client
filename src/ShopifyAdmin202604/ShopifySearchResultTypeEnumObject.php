<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

class ShopifySearchResultTypeEnumObject extends EnumObject
{
    const CUSTOMER = "CUSTOMER";
    const DRAFT_ORDER = "DRAFT_ORDER";
    const INVENTORY_TRANSFER = "INVENTORY_TRANSFER";
    const PRODUCT = "PRODUCT";
    const COLLECTION = "COLLECTION";
    const FILE = "FILE";
    const PAGE = "PAGE";
    const BLOG = "BLOG";
    const ARTICLE = "ARTICLE";
    const URL_REDIRECT = "URL_REDIRECT";
    const PRICE_RULE = "PRICE_RULE";
    const DISCOUNT_REDEEM_CODE = "DISCOUNT_REDEEM_CODE";
    const ORDER = "ORDER";
    const BALANCE_TRANSACTION = "BALANCE_TRANSACTION";
}
