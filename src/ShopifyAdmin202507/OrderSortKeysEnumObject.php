<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class OrderSortKeysEnumObject extends EnumObject
{
    const CREATED_AT = "CREATED_AT";
    const CUSTOMER_NAME = "CUSTOMER_NAME";
    const DESTINATION = "DESTINATION";
    const FINANCIAL_STATUS = "FINANCIAL_STATUS";
    const FULFILLMENT_STATUS = "FULFILLMENT_STATUS";
    const ID = "ID";
    const ORDER_NUMBER = "ORDER_NUMBER";
    const PO_NUMBER = "PO_NUMBER";
    const PROCESSED_AT = "PROCESSED_AT";
    const RELEVANCE = "RELEVANCE";
    const TOTAL_ITEMS_QUANTITY = "TOTAL_ITEMS_QUANTITY";
    const TOTAL_PRICE = "TOTAL_PRICE";
    const UPDATED_AT = "UPDATED_AT";
}
