<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The charge descriptors for a Japanese payments account.
 */
class ShopifyShopifyPaymentsJpChargeStatementDescriptorQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsJpChargeStatementDescriptor";

    /**
     * The default charge statement descriptor.
     */
    public function selectDefault(): static
    {
        $this->selectField("default");

        return $this;
    }

    /**
     * The charge statement descriptor in kana.
     *
     * @deprecated This field is deprecated and will be removed in a future release.
     */
    public function selectKana(): static
    {
        $this->selectField("kana");

        return $this;
    }

    /**
     * The charge statement descriptor in kanji.
     *
     * @deprecated This field is deprecated and will be removed in a future release.
     */
    public function selectKanji(): static
    {
        $this->selectField("kanji");

        return $this;
    }

    /**
     * The prefix of the statement descriptor.
     */
    public function selectPrefix(): static
    {
        $this->selectField("prefix");

        return $this;
    }
}
