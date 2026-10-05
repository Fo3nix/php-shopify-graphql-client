<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyStaffMemberAvatarArgumentsObject extends ArgumentsObject
{
    protected $fallback;

    public function setFallback($shopifyStaffMemberDefaultImage)
    {
        $this->fallback = new RawObject($shopifyStaffMemberDefaultImage);

        return $this;
    }
}
