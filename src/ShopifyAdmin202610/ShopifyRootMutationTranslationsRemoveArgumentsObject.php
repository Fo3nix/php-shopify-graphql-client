<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationTranslationsRemoveArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["resourceId", "translationKeys", "locales"];

    protected $resourceId;
    protected $translationKeys;
    protected $locales;
    protected $marketIds;

    /**
     * ID of the translatable resource for which translations are being deleted.
     */
    public function setResourceId($resourceId): static
    {
        $this->resourceId = $resourceId;

        return $this;
    }

    /**
     * The list of translation keys.
     */
    public function setTranslationKeys(array $translationKeys): static
    {
        $this->translationKeys = $translationKeys;

        return $this;
    }

    /**
     * The list of translation locales. Only locales returned in `shopLocales` are valid.
     */
    public function setLocales(array $locales): static
    {
        $this->locales = $locales;

        return $this;
    }

    /**
     * The list of market IDs.
     */
    public function setMarketIds(array $marketIds): static
    {
        $this->marketIds = $marketIds;

        return $this;
    }
}
