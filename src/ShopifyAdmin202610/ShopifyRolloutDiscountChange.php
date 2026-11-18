<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyDiscountNode;

/**
 * A rollout treatment change that applies to a discount. The concrete type (`RolloutDiscountActivateChange` or `RolloutDiscountExpireChange`) tells you whether the treatment activates or expires the discount for the buyers it serves.
 */
interface ShopifyRolloutDiscountChange extends ShopifyRolloutChange
{
    
    /**
     * The discount that the change applies to. Returns `null` when the discount has been deleted or the caller can't read it.
     *
     * @return ShopifyDiscountNode
     */
    public function getDiscount(): ?ShopifyDiscountNode;

    
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
