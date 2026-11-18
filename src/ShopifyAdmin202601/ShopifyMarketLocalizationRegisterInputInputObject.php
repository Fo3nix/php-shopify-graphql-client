<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields and values for creating or updating a market localization.
 */
class ShopifyMarketLocalizationRegisterInputInputObject extends InputObject
{
    const REQUIRED = ["marketId", "key", "value", "marketLocalizableContentDigest"];

    protected $marketId;
    protected $key;
    protected $value;
    protected $marketLocalizableContentDigest;

    /**
     * The ID of the market that the localization is specific to.
     */
    public function setMarketId($marketId): static
    {
        $this->marketId = $marketId;

        return $this;
    }

    /**
     * A reference to the value being localized on the resource that this market localization belongs to.
     */
    public function setKey($key): static
    {
        $this->key = $key;

        return $this;
    }

    /**
     * The value of the market localization.
     */
    public function setValue($value): static
    {
        $this->value = $value;

        return $this;
    }

    /**
     * A hash digest representation of the content being localized.
     */
    public function setMarketLocalizableContentDigest($marketLocalizableContentDigest): static
    {
        $this->marketLocalizableContentDigest = $marketLocalizableContentDigest;

        return $this;
    }
}
