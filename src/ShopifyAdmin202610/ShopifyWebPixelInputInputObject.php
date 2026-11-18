<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for creating or updating a web pixel.
 */
class ShopifyWebPixelInputInputObject extends InputObject
{
    const REQUIRED = ["settings"];

    protected $settings;

    /**
     * The
     * [settings object](https://shopify.dev/docs/apps/build/marketing-analytics/build-web-pixels#step-2-define-your-web-pixel-settings)
     * for the web pixel. This object specifies configuration options that control the web pixel's functionality and behavior.
     * You can find the settings for a web pixel in `extensions/<your_extension_name>/shopify.extension.toml`.
     */
    public function setSettings($settings): static
    {
        $this->settings = $settings;

        return $this;
    }
}
