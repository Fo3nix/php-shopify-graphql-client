<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMediaError;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMediaWarning;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMediaPreviewImage;

/**
 * Represents a media interface.
 */
interface ShopifyMedia
{
    
    /**
     * A word or phrase to share the nature or contents of a media.
     *
     * @return string
     */
    public function getAlt(): ?string;

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string;

    
    /**
     * The media content type.
     *
     * @return string A ShopifyMediaContentTypeEnumObject value
     */
    public function getMediaContentType(): ?string;

    
    /**
     * Any errors which have occurred on the media.
     *
     * @return ShopifyMediaError[]
     */
    public function getMediaErrors(): ?array;

    
    /**
     * The warnings attached to the media.
     *
     * @return ShopifyMediaWarning[]
     */
    public function getMediaWarnings(): ?array;

    
    /**
     * The preview image for the media.
     *
     * @return ShopifyMediaPreviewImage
     */
    public function getPreview(): ?ShopifyMediaPreviewImage;

    
    /**
     * Current status of the media.
     *
     * @return string A ShopifyMediaStatusEnumObject value
     */
    public function getStatus(): ?string;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
