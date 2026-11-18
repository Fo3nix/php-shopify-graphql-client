<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to create or update a channel market condition.
 */
class ShopifyMarketConditionsChannelsInputInputObject extends InputObject
{
    protected $channelIds;

    /**
     * A list of channel IDs to include in the market condition.
     */
    public function setChannelIds(array $channelIds): static
    {
        $this->channelIds = $channelIds;

        return $this;
    }
}
