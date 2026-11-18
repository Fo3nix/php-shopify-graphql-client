<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * A job corresponds to some long running task that the client should poll for status.
 */
interface ShopifyJobResult
{
    
    /**
     * This indicates if the job is still queued or has been run.
     *
     * @return bool
     */
    public function getDone(): ?bool;

    
    /**
     * A globally-unique ID that's returned when running an asynchronous mutation.
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
