<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields and values for creating or updating a translation.
 */
class ShopifyTranslationInputInputObject extends InputObject
{
    const REQUIRED = ["locale", "key", "value", "translatableContentDigest"];

    protected $locale;
    protected $key;
    protected $value;
    protected $translatableContentDigest;
    protected $marketId;

    /**
     * ISO code of the locale being translated into. Only locales returned in `shopLocales` are valid.
     */
    public function setLocale($locale): static
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * On the resource that this translation belongs to, the reference to the value being translated.
     */
    public function setKey($key): static
    {
        $this->key = $key;

        return $this;
    }

    /**
     * The value of the translation.
     */
    public function setValue($value): static
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Hash digest representation of the content being translated.
     */
    public function setTranslatableContentDigest($translatableContentDigest): static
    {
        $this->translatableContentDigest = $translatableContentDigest;

        return $this;
    }

    /**
     * The ID of the market that the translation is specific to. Not specifying this field means that the translation will be available in all markets.
     */
    public function setMarketId($marketId): static
    {
        $this->marketId = $marketId;

        return $this;
    }
}
