<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class CustomerRfmGroupEnumObject extends EnumObject
{
    const CHAMPIONS = "CHAMPIONS";
    const LOYAL = "LOYAL";
    const ACTIVE = "ACTIVE";
    const NEW = "NEW";
    const PROMISING = "PROMISING";
    const NEEDS_ATTENTION = "NEEDS_ATTENTION";
    const ALMOST_LOST = "ALMOST_LOST";
    const PREVIOUSLY_LOYAL = "PREVIOUSLY_LOYAL";
    const AT_RISK = "AT_RISK";
    const DORMANT = "DORMANT";
    const PROSPECTS = "PROSPECTS";
}
