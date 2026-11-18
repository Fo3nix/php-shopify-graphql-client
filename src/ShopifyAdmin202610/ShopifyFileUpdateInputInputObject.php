<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields that are required to update a file object.
 */
class ShopifyFileUpdateInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $alt;
    protected $originalSource;
    protected $previewImageSource;
    protected $filename;
    protected $referencesToAdd;
    protected $referencesToRemove;

    /**
     * The ID of the file to be updated.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The alt text description of the file for screen readers and accessibility.
     */
    public function setAlt($alt): static
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * The source from which to update a media image or generic file.
     * This can be an external URL or a
     * [staged upload URL](https://shopify.dev/api/admin-graphql/latest/mutations/stageduploadscreate).
     */
    public function setOriginalSource($originalSource): static
    {
        $this->originalSource = $originalSource;

        return $this;
    }

    /**
     * The source from which to update the media preview image.
     * May be an external URL or a
     * [staged upload URL](https://shopify.dev/api/admin-graphql/latest/mutations/stageduploadscreate).
     */
    public function setPreviewImageSource($previewImageSource): static
    {
        $this->previewImageSource = $previewImageSource;

        return $this;
    }

    /**
     * The name of the file including its extension.
     */
    public function setFilename($filename): static
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * The IDs of the references to add to the file. Currently only accepts product IDs.
     */
    public function setReferencesToAdd(array $referencesToAdd): static
    {
        $this->referencesToAdd = $referencesToAdd;

        return $this;
    }

    /**
     * The IDs of the references to remove from the file. Currently only accepts product IDs.
     */
    public function setReferencesToRemove(array $referencesToRemove): static
    {
        $this->referencesToRemove = $referencesToRemove;

        return $this;
    }
}
