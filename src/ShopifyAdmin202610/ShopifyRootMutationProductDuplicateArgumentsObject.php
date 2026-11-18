<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationProductDuplicateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["productId", "newTitle"];

    protected $productId;
    protected $newTitle;
    protected $newStatus;
    protected $includeImages;
    protected $includeTranslations;
    protected $synchronous;

    /**
     * The ID of the product to be duplicated.
     */
    public function setProductId($productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * The new title of the product.
     */
    public function setNewTitle($newTitle): static
    {
        $this->newTitle = $newTitle;

        return $this;
    }

    /**
     * The new status of the product. If no value is provided the status will be inherited from the original product.
     */
    public function setNewStatus($shopifyProductStatus): static
    {
        $this->newStatus = new RawObject($shopifyProductStatus);

        return $this;
    }

    /**
     * Specifies whether or not to duplicate images.
     */
    public function setIncludeImages($includeImages): static
    {
        $this->includeImages = $includeImages;

        return $this;
    }

    /**
     * Specifies whether or not to duplicate translations.
     */
    public function setIncludeTranslations($includeTranslations): static
    {
        $this->includeTranslations = $includeTranslations;

        return $this;
    }

    /**
     * Specifies whether or not to run the mutation synchronously.
     */
    public function setSynchronous($synchronous): static
    {
        $this->synchronous = $synchronous;

        return $this;
    }
}
