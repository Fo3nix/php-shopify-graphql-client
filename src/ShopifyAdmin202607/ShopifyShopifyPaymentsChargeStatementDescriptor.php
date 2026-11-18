<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * The charge descriptors for a payments account.
 */
interface ShopifyShopifyPaymentsChargeStatementDescriptor
{
    
    /**
     * The default charge statement descriptor.
     *
     * @return string
     */
    public function getDefault(): ?string;

    
    /**
     * The prefix of the statement descriptor.
     *
     * @return string
     */
    public function getPrefix(): ?string;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
