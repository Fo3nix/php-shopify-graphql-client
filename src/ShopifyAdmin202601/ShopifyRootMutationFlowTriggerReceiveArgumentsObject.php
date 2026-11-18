<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFlowTriggerReceiveArgumentsObject extends ArgumentsObject
{
    protected $handle;
    protected $payload;

    /**
     * The handle of the trigger.
     */
    public function setHandle($handle): static
    {
        $this->handle = $handle;

        return $this;
    }

    /**
     * The payload needed to run the Trigger.
     */
    public function setPayload($payload): static
    {
        $this->payload = $payload;

        return $this;
    }
}
