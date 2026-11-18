<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOnlineStoreTheme;

/**
 * A rollout treatment change that applies to a theme. The concrete type identifies the operation applied to the buyers the treatment serves.
 */
interface ShopifyRolloutThemeChange extends ShopifyRolloutChange
{
    
    /**
     * A globally unique ID for this change, not the resource it affects.
     *
     * @return string
     */
    public function getId(): ?string;

    
    /**
     * The theme that the change applies to. Returns `null` when the theme has been deleted or the caller can't read it.
     *
     * @return ShopifyOnlineStoreTheme
     */
    public function getTheme(): ?ShopifyOnlineStoreTheme;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
