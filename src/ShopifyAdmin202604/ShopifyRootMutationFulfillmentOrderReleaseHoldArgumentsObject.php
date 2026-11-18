<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationFulfillmentOrderReleaseHoldArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $holdIds;
    protected $externalId;

    /**
     * The ID of the fulfillment order for which to release the fulfillment hold.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The IDs of the fulfillment holds to release.<br/>
     *             <br/>
     *             Holds will only be released if they belong to the fulfillment order specified by the `id` argument.<br/>
     *             <br/>
     *             <strong>NOTE:</strong> If not supplied, all holds for the fulfillment order will be released.
     *             It is highly recommended that apps supply the ids of the holds that they intend to release.
     *             Releasing all holds on a fulfillment order will result in the fulfillment order being released prematurely
     *             and items being incorrectly fulfilled.
     */
    public function setHoldIds(array $holdIds): static
    {
        $this->holdIds = $holdIds;

        return $this;
    }

    /**
     * A configurable ID used to track the automation system releasing this hold.
     */
    public function setExternalId($externalId): static
    {
        $this->externalId = $externalId;

        return $this;
    }
}
