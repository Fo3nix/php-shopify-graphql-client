<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

class ShopifyDisputeTypeEnumObject extends EnumObject
{
    const CHARGEBACK = "CHARGEBACK";
    const INQUIRY = "INQUIRY";
}
