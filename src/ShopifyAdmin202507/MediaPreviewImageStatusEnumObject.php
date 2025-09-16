<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class MediaPreviewImageStatusEnumObject extends EnumObject
{
    const UPLOADED = "UPLOADED";
    const PROCESSING = "PROCESSING";
    const READY = "READY";
    const FAILED = "FAILED";
}
