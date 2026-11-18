<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyFileError;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMediaPreviewImage;

/**
 * A file interface.
 */
interface ShopifyFile
{
    
    /**
     * A word or phrase to describe the contents or the function of a file.
     *
     * @return string
     */
    public function getAlt(): ?string;

    
    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) when the file was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon;

    
    /**
     * Any errors that have occurred on the file.
     *
     * @return ShopifyFileError[]
     */
    public function getFileErrors(): ?array;

    
    /**
     * The status of the file.
     *
     * @return string A ShopifyFileStatusEnumObject value
     */
    public function getFileStatus(): ?string;

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string;

    
    /**
     * The preview image for the media.
     *
     * @return ShopifyMediaPreviewImage
     */
    public function getPreview(): ?ShopifyMediaPreviewImage;

    
    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) when the file was last updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
