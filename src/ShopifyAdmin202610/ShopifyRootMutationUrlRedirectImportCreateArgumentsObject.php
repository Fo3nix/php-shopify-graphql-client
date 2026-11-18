<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationUrlRedirectImportCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["url"];

    protected $url;

    /**
     * The staged upload URL of the CSV file.
     * You can download [a sample URL redirect CSV file](https://help.shopify.com/csv/sample-redirect-template.csv).
     */
    public function setUrl($url): static
    {
        $this->url = $url;

        return $this;
    }
}
