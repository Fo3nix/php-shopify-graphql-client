<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class SearchResultTypeEnumObject extends EnumObject
{
    const CUSTOMER = "CUSTOMER";
    const DRAFT_ORDER = "DRAFT_ORDER";
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
