<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * The subject line of a comment event.
 */
interface ShopifyCommentEventSubject
{
    
    /**
     * Whether the timeline subject has a timeline comment. If true, then a timeline comment exists.
     *
     * @return bool
     */
    public function getHasTimelineComment(): ?bool;

    
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
