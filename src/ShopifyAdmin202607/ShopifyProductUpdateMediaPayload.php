<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMediaHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMedia;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMediaUserError;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProduct;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyUserError;

/**
 * Return type for `productUpdateMedia` mutation.
 */
class ShopifyProductUpdateMediaPayload
{
    protected $media;
    protected $mediaUserErrors;
    protected $product;
    protected $userErrors;

    
    /**
     * The updated media object.
     *
     * @return ShopifyMedia[]
     */
    public function getMedia(): ?array
    {
        return $this->media;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyMediaUserError[]
     */
    public function getMediaUserErrors(): ?array
    {
        return $this->mediaUserErrors;
    }

    
    /**
     * The product on which media was updated.
     *
     * @return ShopifyProduct
     */
    public function getProduct(): ?ShopifyProduct
    {
        return $this->product;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyUserError[]
     */
    public function getUserErrors(): ?array
    {
        return $this->userErrors;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['media']) && $data['media'] !== null) {
                $instance->media = array_map(function($item) { return ShopifyMediaHydrator::fromArray($item); }, $data['media']);
            }
            if (isset($data['mediaUserErrors']) && $data['mediaUserErrors'] !== null) {
                $instance->mediaUserErrors = array_map(function($item) { return ShopifyMediaUserError::fromArray($item); }, $data['mediaUserErrors']);
            }
            if (isset($data['product']) && $data['product'] !== null) {
                $instance->product = ShopifyProduct::fromArray($data['product']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyUserError::fromArray($item); }, $data['userErrors']);
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->media !== null) {
                $data['media'] = array_map(function($item) { return ShopifyMediaHydrator::toArray($item); }, $this->media);
            }
            if ($this->mediaUserErrors !== null) {
                $data['mediaUserErrors'] = array_map(function($item) { return $item->asArray(); }, $this->mediaUserErrors);
            }
            if ($this->product !== null) {
                $data['product'] = $this->product->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
