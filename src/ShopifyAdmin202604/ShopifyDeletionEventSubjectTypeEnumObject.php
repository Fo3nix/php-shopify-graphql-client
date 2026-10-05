<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

class ShopifyDeletionEventSubjectTypeEnumObject extends EnumObject
{
    const COLLECTION = "COLLECTION";
    const PRODUCT = "PRODUCT";
}
