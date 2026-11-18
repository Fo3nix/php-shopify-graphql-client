<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the file to create or update.
 */
class ShopifyOnlineStoreThemeFilesUpsertFileInputInputObject extends InputObject
{
    const REQUIRED = ["filename", "body"];

    protected $filename;
    protected $body;

    /**
     * The filename of the theme file.
     */
    public function setFilename($filename): static
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * The body of the theme file.
     */
    public function setBody(ShopifyOnlineStoreThemeFileBodyInputInputObject $shopifyOnlineStoreThemeFileBodyInputInputObject): static
    {
        $this->body = $shopifyOnlineStoreThemeFileBodyInputInputObject;

        return $this;
    }
}
