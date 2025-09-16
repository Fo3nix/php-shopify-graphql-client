<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class FulfillmentOrderMerchantRequestKindEnumObject extends EnumObject
{
    const FULFILLMENT_REQUEST = "FULFILLMENT_REQUEST";
    const CANCELLATION_REQUEST = "CANCELLATION_REQUEST";
}
