<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

class ShopifySubCollectionIneligibleReasonEnumObject extends EnumObject
{
    const INVALID_COLLECTION_REFERENCE = "INVALID_COLLECTION_REFERENCE";
    const SELF_REFERENCE = "SELF_REFERENCE";
    const CHAIN_REFERENCE = "CHAIN_REFERENCE";
}
