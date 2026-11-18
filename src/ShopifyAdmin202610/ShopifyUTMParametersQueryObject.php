<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a set of UTM parameters.
 */
class ShopifyUTMParametersQueryObject extends QueryObject
{
    const OBJECT_NAME = "UTMParameters";

    /**
     * The name of a marketing campaign.
     */
    public function selectCampaign(): static
    {
        $this->selectField("campaign");

        return $this;
    }

    /**
     * Identifies specific content in a marketing campaign. Used to differentiate between similar content or links in a marketing campaign to determine which is the most effective.
     */
    public function selectContent(): static
    {
        $this->selectField("content");

        return $this;
    }

    /**
     * The medium of a marketing campaign, such as a banner or email newsletter.
     */
    public function selectMedium(): static
    {
        $this->selectField("medium");

        return $this;
    }

    /**
     * The source of traffic to the merchant's store, such as Google or an email newsletter.
     */
    public function selectSource(): static
    {
        $this->selectField("source");

        return $this;
    }

    /**
     * Paid search terms used by a marketing campaign.
     */
    public function selectTerm(): static
    {
        $this->selectField("term");

        return $this;
    }
}
