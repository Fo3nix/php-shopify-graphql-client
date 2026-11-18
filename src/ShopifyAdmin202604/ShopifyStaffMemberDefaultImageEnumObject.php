<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Represents the fallback avatar image for a staff member. This is used only if the staff member has no avatar image.
 */
class ShopifyStaffMemberDefaultImageEnumObject extends EnumObject
{
    /**
     * Returns a default avatar image for the staff member.
     */
    const DEFAULT = "DEFAULT";
    /**
     * Returns a transparent avatar image for the staff member.
     */
    const TRANSPARENT = "TRANSPARENT";
    /**
     * Returns a URL that returns a 404 error if the image is not present.
     */
    const NOT_FOUND = "NOT_FOUND";
}
