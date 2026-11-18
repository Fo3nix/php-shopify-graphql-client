<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible categories of an app installation, based on their purpose
 * or the environment they can run in.
 */
class ShopifyAppInstallationCategoryEnumObject extends EnumObject
{
    /**
     * Apps that serve as channels through which sales are made, such as the online store.
     */
    const CHANNEL = "CHANNEL";
    /**
     * Apps that can be used in the POS mobile client.
     */
    const POS_EMBEDDED = "POS_EMBEDDED";
}
