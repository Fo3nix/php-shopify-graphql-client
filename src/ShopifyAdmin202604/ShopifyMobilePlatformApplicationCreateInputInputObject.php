<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a mobile application platform type.
 */
class ShopifyMobilePlatformApplicationCreateInputInputObject extends InputObject
{
    protected $android;
    protected $apple;

    /**
     * Android based mobile platform application.
     */
    public function setAndroid(ShopifyMobilePlatformApplicationCreateAndroidInputInputObject $shopifyMobilePlatformApplicationCreateAndroidInputInputObject): static
    {
        $this->android = $shopifyMobilePlatformApplicationCreateAndroidInputInputObject;

        return $this;
    }

    /**
     * Apple based mobile platform application.
     */
    public function setApple(ShopifyMobilePlatformApplicationCreateAppleInputInputObject $shopifyMobilePlatformApplicationCreateAppleInputInputObject): static
    {
        $this->apple = $shopifyMobilePlatformApplicationCreateAppleInputInputObject;

        return $this;
    }
}
