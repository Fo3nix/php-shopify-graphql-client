<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class DeletionEventSubjectTypeEnumObject extends EnumObject
{
    const COLLECTION = "COLLECTION";
    const PRODUCT = "PRODUCT";
}
