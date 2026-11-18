<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the mobile platform application platform type.
 */
class ShopifyMobilePlatformApplicationUpdateInputInputObject extends InputObject
{
    protected $android;
    protected $apple;

    /**
     * Android based Mobile Platform Application.
     */
    public function setAndroid(ShopifyMobilePlatformApplicationUpdateAndroidInputInputObject $shopifyMobilePlatformApplicationUpdateAndroidInputInputObject): static
    {
        $this->android = $shopifyMobilePlatformApplicationUpdateAndroidInputInputObject;

        return $this;
    }

    /**
     * Apple based Mobile Platform Application.
     */
    public function setApple(ShopifyMobilePlatformApplicationUpdateAppleInputInputObject $shopifyMobilePlatformApplicationUpdateAppleInputInputObject): static
    {
        $this->apple = $shopifyMobilePlatformApplicationUpdateAppleInputInputObject;

        return $this;
    }
}
