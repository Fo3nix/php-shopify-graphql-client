<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A source for a Shopify-hosted 3d model.
 *
 * Types of sources include GLB and USDZ formatted 3d models, where the former
 * is an original 3d model and the latter has been converted from the original.
 *
 * If the original source is in GLB format and over 15 MBs in size, then both the
 * original and the USDZ formatted source are optimized to reduce the file size.
 */
class ShopifyModel3dSourceQueryObject extends QueryObject
{
    const OBJECT_NAME = "Model3dSource";

    /**
     * The 3d model source's filesize.
     */
    public function selectFilesize(): static
    {
        $this->selectField("filesize");

        return $this;
    }

    /**
     * The 3d model source's format.
     */
    public function selectFormat(): static
    {
        $this->selectField("format");

        return $this;
    }

    /**
     * The 3d model source's MIME type.
     */
    public function selectMimeType(): static
    {
        $this->selectField("mimeType");

        return $this;
    }

    /**
     * The 3d model source's URL.
     */
    public function selectUrl(): static
    {
        $this->selectField("url");

        return $this;
    }
}
