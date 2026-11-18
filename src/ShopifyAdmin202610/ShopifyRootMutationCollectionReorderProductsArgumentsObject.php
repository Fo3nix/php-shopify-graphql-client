<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCollectionReorderProductsArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "moves"];

    protected $id;
    protected $moves;

    /**
     * The ID of the collection on which to reorder products.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * A list of moves to perform, evaluated in order. Provide only products whose positions changed; do not send the full list.
     * `newPosition` is a zero-based index evaluated at the time each move is applied (after any prior moves).
     * `newPosition` values do not need to be unique, and if a value is greater than or equal to the number of products, the product is moved to the end.
     * Up to 250 moves are supported.
     */
    public function setMoves(array $moves): static
    {
        $this->moves = $moves;

        return $this;
    }
}
