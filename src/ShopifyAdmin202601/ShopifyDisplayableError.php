<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * Represents an error in the input of a mutation.
 */
interface ShopifyDisplayableError
{
    
    /**
     * The path to the input field that caused the error.
     *
     * @return string[]
     */
    public function getField(): ?array;

    
    /**
     * The error message.
     *
     * @return string
     */
    public function getMessage(): ?string;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
