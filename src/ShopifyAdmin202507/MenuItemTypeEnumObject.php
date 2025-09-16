<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class MenuItemTypeEnumObject extends EnumObject
{
    const FRONTPAGE = "FRONTPAGE";
    const COLLECTION = "COLLECTION";
    const COLLECTIONS = "COLLECTIONS";
    const PRODUCT = "PRODUCT";
    const CATALOG = "CATALOG";
    const PAGE = "PAGE";
    const BLOG = "BLOG";
    const ARTICLE = "ARTICLE";
    const SEARCH = "SEARCH";
    const SHOP_POLICY = "SHOP_POLICY";
    const HTTP = "HTTP";
    const METAOBJECT = "METAOBJECT";
    const CUSTOMER_ACCOUNT_PAGE = "CUSTOMER_ACCOUNT_PAGE";
}
