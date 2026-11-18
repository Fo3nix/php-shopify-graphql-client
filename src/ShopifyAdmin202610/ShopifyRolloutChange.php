<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * A change that a rollout treatment makes while it's served. Changes describe what the treatment does, not the current state of the affected resource. Use inline fragments on the concrete types to read type-specific fields.
 */
interface ShopifyRolloutChange
{
    
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
