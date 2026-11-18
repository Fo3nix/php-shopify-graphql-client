<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPubSubServerPixelUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["pubSubProject", "pubSubTopic"];

    protected $pubSubProject;
    protected $pubSubTopic;

    /**
     * The Google PubSub project ID.
     */
    public function setPubSubProject($pubSubProject): static
    {
        $this->pubSubProject = $pubSubProject;

        return $this;
    }

    /**
     * The Google PubSub topic ID.
     */
    public function setPubSubTopic($pubSubTopic): static
    {
        $this->pubSubTopic = $pubSubTopic;

        return $this;
    }
}
