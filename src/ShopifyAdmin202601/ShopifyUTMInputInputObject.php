<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * Specifies the
 * [Urchin Traffic Module (UTM) parameters](https://en.wikipedia.org/wiki/UTM_parameters)
 * that are associated with a related marketing campaign.
 */
class ShopifyUTMInputInputObject extends InputObject
{
    const REQUIRED = ["campaign", "source", "medium"];

    protected $campaign;
    protected $source;
    protected $medium;

    /**
     * The name of the UTM campaign.
     */
    public function setCampaign($campaign): static
    {
        $this->campaign = $campaign;

        return $this;
    }

    /**
     * The name of the website or application where the referral link exists.
     */
    public function setSource($source): static
    {
        $this->source = $source;

        return $this;
    }

    /**
     * The UTM campaign medium.
     */
    public function setMedium($medium): static
    {
        $this->medium = $medium;

        return $this;
    }
}
