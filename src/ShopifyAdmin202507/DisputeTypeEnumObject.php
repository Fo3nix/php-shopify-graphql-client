<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class DisputeTypeEnumObject extends EnumObject
{
    const CHARGEBACK = "CHARGEBACK";
    const INQUIRY = "INQUIRY";
}
