<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyEventConnection;

/**
 * Represents an object that has a list of events.
 */
interface ShopifyHasEvents
{
    
    /**
     * The paginated list of events associated with the host subject.
     *
     * @return ShopifyEventConnection
     */
    public function getEvents(): ?ShopifyEventConnection;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
