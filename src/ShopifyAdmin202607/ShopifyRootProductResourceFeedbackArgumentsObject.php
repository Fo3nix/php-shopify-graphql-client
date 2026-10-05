<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootProductResourceFeedbackArgumentsObject extends ArgumentsObject
{
    protected $id;
    protected $channelId;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;

        return $this;
    }
}
