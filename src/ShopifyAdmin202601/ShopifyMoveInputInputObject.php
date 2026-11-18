<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input for moving a single object to a specific position in a set.
 *
 * Provide this input only for objects whose position actually changed; do not send inputs for the entire set.
 *
 * - id: The ID (GID) of the object to move.
 * - newPosition: The zero-based index of the object's position within the set at the time this move is applied.
 *
 * Moves are applied sequentially, so `newPosition` for each move is evaluated after all prior moves in the same list.
 * If `newPosition` is greater than or equal to the number of objects, the object is moved to the end of the set.
 * Values do not have to be unique. Objects not included in the move list keep their relative order, aside from any displacement caused by the moves.
 */
class ShopifyMoveInputInputObject extends InputObject
{
    const REQUIRED = ["id", "newPosition"];

    protected $id;
    protected $newPosition;

    /**
     * The ID of the object to be moved.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Zero-based index of the object's position at the time this move is applied. If the value is >= the number of objects, the object is placed at the end.
     */
    public function setNewPosition($newPosition): static
    {
        $this->newPosition = $newPosition;

        return $this;
    }
}
