<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootProductResourceFeedbackArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $channelId;

    /**
     * The product associated with the resource feedback.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The channel to filter resource feedback by. Use this when your app manages multiple channels and each channel may have different feedback for the same product.
     */
    public function setChannelId($channelId): static
    {
        $this->channelId = $channelId;

        return $this;
    }
}
