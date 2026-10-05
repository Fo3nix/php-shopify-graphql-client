<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

class ShopifyFulfillmentOrderMerchantRequestKindEnumObject extends EnumObject
{
    const FULFILLMENT_REQUEST = "FULFILLMENT_REQUEST";
    const CANCELLATION_REQUEST = "CANCELLATION_REQUEST";
}
