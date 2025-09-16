<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class StaffMemberAvatarArgumentsObject extends ArgumentsObject
{
    protected $fallback;

    public function setFallback($staffMemberDefaultImage)
    {
        $this->fallback = new RawObject($staffMemberDefaultImage);

        return $this;
    }
}
