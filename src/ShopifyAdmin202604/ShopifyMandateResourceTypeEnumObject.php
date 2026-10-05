<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

class ShopifyMandateResourceTypeEnumObject extends EnumObject
{
    const CREDENTIAL_ON_FILE = "CREDENTIAL_ON_FILE";
    const CHECKOUT = "CHECKOUT";
    const DRAFT_ORDER = "DRAFT_ORDER";
    const ORDER = "ORDER";
    const SUBSCRIPTIONS = "SUBSCRIPTIONS";
}
