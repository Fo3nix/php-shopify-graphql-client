<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDeliveryRateGroupConditions;

/**
 * A delivery rate group within an option definition.
 */
interface ShopifyDeliveryOptionDefinitionRateGroup
{
    
    /**
     * Conditions that scope this rate group to specific collections or origin locations.
     *
     * @return ShopifyDeliveryRateGroupConditions
     */
    public function getConditions(): ?ShopifyDeliveryRateGroupConditions;

    
    /**
     * A globally-unique ID.
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
