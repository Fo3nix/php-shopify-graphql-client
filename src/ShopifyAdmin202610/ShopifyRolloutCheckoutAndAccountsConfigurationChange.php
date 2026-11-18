<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfiguration;

/**
 * A rollout treatment change that applies to a checkout and accounts configuration.
 */
interface ShopifyRolloutCheckoutAndAccountsConfigurationChange extends ShopifyRolloutChange
{
    
    /**
     * The configuration that the change applies to. Returns `null` when the configuration has been deleted or the caller can't read it.
     *
     * @return ShopifyCheckoutAndAccountsConfiguration
     */
    public function getCheckoutAndAccountsConfiguration(): ?ShopifyCheckoutAndAccountsConfiguration;

    
    /**
     * A globally unique ID for this change, not the resource it affects.
     *
     * @return string
     */
    public function getId(): ?string;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
