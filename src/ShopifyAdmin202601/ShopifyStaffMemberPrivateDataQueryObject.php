<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the data used to customize the Shopify admin experience for a logged-in staff member.
 */
class ShopifyStaffMemberPrivateDataQueryObject extends QueryObject
{
    const OBJECT_NAME = "StaffMemberPrivateData";

    /**
     * The URL to the staff member's account settings page.
     */
    public function selectAccountSettingsUrl(): static
    {
        $this->selectField("accountSettingsUrl");

        return $this;
    }

    /**
     * The date and time when the staff member was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * Access permissions for the staff member.
     *
     * @deprecated There's no alternative field to use instead.
     */
    public function selectPermissions(): static
    {
        $this->selectField("permissions");

        return $this;
    }
}
