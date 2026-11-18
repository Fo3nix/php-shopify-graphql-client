<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a source for a Shopify hosted video.
 *
 * Types of sources include the original video, lower resolution versions of the original video,
 * and an m3u8 playlist file.
 *
 * Only [videos](https://shopify.dev/api/admin-graphql/latest/objects/video) with a status field
 * of [READY](https://shopify.dev/api/admin-graphql/latest/enums/MediaStatus#value-ready) have sources.
 */
class ShopifyVideoSourceQueryObject extends QueryObject
{
    const OBJECT_NAME = "VideoSource";

    /**
     * The video source's file size in bytes.
     */
    public function selectFileSize(): static
    {
        $this->selectField("fileSize");

        return $this;
    }

    /**
     * The video source's file format extension.
     */
    public function selectFormat(): static
    {
        $this->selectField("format");

        return $this;
    }

    /**
     * The video source's height.
     */
    public function selectHeight(): static
    {
        $this->selectField("height");

        return $this;
    }

    /**
     * The video source's MIME type.
     */
    public function selectMimeType(): static
    {
        $this->selectField("mimeType");

        return $this;
    }

    /**
     * The video source's URL.
     */
    public function selectUrl(): static
    {
        $this->selectField("url");

        return $this;
    }

    /**
     * The video source's width.
     */
    public function selectWidth(): static
    {
        $this->selectField("width");

        return $this;
    }
}
