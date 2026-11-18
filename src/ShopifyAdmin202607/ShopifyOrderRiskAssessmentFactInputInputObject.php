<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a risk assessment fact.
 */
class ShopifyOrderRiskAssessmentFactInputInputObject extends InputObject
{
    const REQUIRED = ["sentiment", "description"];

    protected $sentiment;
    protected $description;

    /**
     * Indicates whether the fact contributes negatively, neutrally, or positively to risk.
     */
    public function setSentiment($shopifyRiskFactSentiment): static
    {
        $this->sentiment = new RawObject($shopifyRiskFactSentiment);

        return $this;
    }

    /**
     * Descriptions longer than 256 characters are truncated.
     */
    public function setDescription($description): static
    {
        $this->description = $description;

        return $this;
    }
}
