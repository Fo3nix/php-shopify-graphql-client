<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyStaffMemberAvatarArgumentsObject extends ArgumentsObject
{
    protected $fallback;

    /**
     * The default image returned if the staff member has no avatar.
     */
    public function setFallback($shopifyStaffMemberDefaultImage): static
    {
        $this->fallback = new RawObject($shopifyStaffMemberDefaultImage);

        return $this;
    }
}
