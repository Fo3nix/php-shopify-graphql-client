<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCheckoutAndAccountsConfigurationBranding;
use Carbon\Carbon;

/**
 * Represents a checkout and accounts configuration interface.
 */
interface ShopifyCheckoutAndAccountsConfigurationInterface
{
    
    /**
     * The branding configuration.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBranding
     */
    public function getBranding(): ?ShopifyCheckoutAndAccountsConfigurationBranding;

    
    /**
     * The date and time when the configuration was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon;

    
    /**
     * The date and time when the configuration was last edited.
     *
     * @return Carbon
     */
    public function getEditedAt(): ?Carbon;

    
    /**
     * The configuration name.
     *
     * @return string
     */
    public function getName(): ?string;

    
    /**
     * The date and time when the configuration was last updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
