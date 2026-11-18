<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCollectionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyLocationConnection;

/**
 * A shipping option shown to buyers at checkout. Implemented by concrete option types.
 */
interface ShopifyDeliveryOptionDefinition
{
    
    /**
     * The currency used for all money values in this shipping option.
     *
     * @return string A ShopifyCurrencyCodeEnumObject value
     */
    public function getCurrency(): ?string;

    
    /**
     * Optional description shown to buyers.
     *
     * @return string
     */
    public function getDescription(): ?string;

    
    /**
     * The cart subtotal required for free shipping. Null if no threshold is set.
     *
     * @return ShopifyMoneyV2
     */
    public function getFreeDeliveryMinimumValue(): ?ShopifyMoneyV2;

    
    /**
     * A globally unique ID for this shipping option.
     *
     * @return string
     */
    public function getId(): ?string;

    
    /**
     * Collections that any rate group in this shipping option applies to.
     *
     * @return ShopifyCollectionConnection
     */
    public function getIncludedCollections(): ?ShopifyCollectionConnection;

    
    /**
     * Origin locations that any rate group in this shipping option applies to.
     *
     * @return ShopifyLocationConnection
     */
    public function getIncludedLocations(): ?ShopifyLocationConnection;

    
    /**
     * Whether this shipping option is active and shown to buyers.
     *
     * @return bool
     */
    public function getIsActive(): ?bool;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
