<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for shop-level delivery settings.
 */
class ShopifyDeliverySettingInputInputObject extends InputObject
{
    protected $legacyModeProfiles;

    /**
     * Whether legacy compatibility mode is enabled for the multi-location delivery profiles feature. Note: this field is effectively deprecated and will be removed in a future version of the API.
     */
    public function setLegacyModeProfiles($legacyModeProfiles): static
    {
        $this->legacyModeProfiles = $legacyModeProfiles;

        return $this;
    }
}
