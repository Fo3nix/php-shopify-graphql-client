<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCatalogHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCatalog;

/**
 * A rollout treatment change that applies to a catalog. The concrete type identifies the operation applied to the buyers the treatment serves.
 */
interface ShopifyRolloutCatalogChange extends ShopifyRolloutChange
{
    
    /**
     * The catalog that the change applies to. Returns `null` when the catalog has been deleted or the caller can't read it.
     *
     * @return ShopifyCatalog
     */
    public function getCatalog(): ?ShopifyCatalog;

    
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
