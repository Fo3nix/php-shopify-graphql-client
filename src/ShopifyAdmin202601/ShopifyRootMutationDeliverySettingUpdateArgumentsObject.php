<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationDeliverySettingUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["setting"];

    protected $setting;

    /**
     * Specifies the input fields for the delivery shop level settings.
     */
    public function setSetting(ShopifyDeliverySettingInputInputObject $shopifyDeliverySettingInputInputObject): static
    {
        $this->setting = $shopifyDeliverySettingInputInputObject;

        return $this;
    }
}
