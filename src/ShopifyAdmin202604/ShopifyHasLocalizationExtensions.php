<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyLocalizationExtensionConnection;

/**
 * Localization extensions associated with the specified resource. For example, the tax id for government invoice.
 */
interface ShopifyHasLocalizationExtensions
{
    
    /**
     * List of localization extensions for the resource.
     *
     * @return ShopifyLocalizationExtensionConnection
     */
    public function getLocalizationExtensions(): ?ShopifyLocalizationExtensionConnection;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
