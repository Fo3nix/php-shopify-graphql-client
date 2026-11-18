<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the file copy.
 */
class ShopifyThemeFilesCopyFileInputInputObject extends InputObject
{
    const REQUIRED = ["dstFilename", "srcFilename"];

    protected $dstFilename;
    protected $srcFilename;

    /**
     * The new file where the content is copied to.
     */
    public function setDstFilename($dstFilename): static
    {
        $this->dstFilename = $dstFilename;

        return $this;
    }

    /**
     * The source file to copy from.
     */
    public function setSrcFilename($srcFilename): static
    {
        $this->srcFilename = $srcFilename;

        return $this;
    }
}
