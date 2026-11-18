<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Trace information for a single country-language product feed sync triggered by [`channelFullSync`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/channelFullSync).
 */
class ShopifyFullSyncTraceInfoQueryObject extends QueryObject
{
    const OBJECT_NAME = "FullSyncTraceInfo";

    /**
     * The country of the product feed that was triggered.
     */
    public function selectCountry(): static
    {
        $this->selectField("country");

        return $this;
    }

    /**
     * The language of the product feed that was triggered.
     */
    public function selectLanguage(): static
    {
        $this->selectField("language");

        return $this;
    }

    /**
     * The operation ID of a successfully initiated product full sync operation. This field is set to nil when the full sync operation isn't successfully initiated.
     */
    public function selectOperationId(): static
    {
        $this->selectField("operationId");

        return $this;
    }
}
