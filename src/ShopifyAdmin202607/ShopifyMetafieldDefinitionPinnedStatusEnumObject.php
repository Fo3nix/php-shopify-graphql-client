<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible metafield definition pinned statuses.
 */
class ShopifyMetafieldDefinitionPinnedStatusEnumObject extends EnumObject
{
    /**
     * All metafield definitions.
     */
    const ANY = "ANY";
    /**
     * Only metafield definitions that are pinned.
     */
    const PINNED = "PINNED";
    /**
     * Only metafield definitions that are not pinned.
     */
    const UNPINNED = "UNPINNED";
}
