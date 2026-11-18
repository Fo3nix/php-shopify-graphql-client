<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyImage;

/**
 * A shareable URL for a discount code.
 */
class ShopifyDiscountShareableUrl
{
    protected $targetItemImage;
    protected $targetType;
    protected $title;
    protected $url;

    
    /**
     * The image URL of the item (product or collection) to which the discount applies.
     *
     * @return ShopifyImage
     */
    public function getTargetItemImage(): ?ShopifyImage
    {
        return $this->targetItemImage;
    }

    
    /**
     * The type of page that's associated with the URL.
     *
     * @return string A ShopifyDiscountShareableUrlTargetTypeEnumObject value
     */
    public function getTargetType(): ?string
    {
        return $this->targetType;
    }

    
    /**
     * The title of the page that's associated with the URL.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * The URL for the discount code.
     *
     * @return string
     */
    public function getUrl(): mixed
    {
        return $this->url;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['targetItemImage']) && $data['targetItemImage'] !== null) {
                $instance->targetItemImage = ShopifyImage::fromArray($data['targetItemImage']);
            }
            if (isset($data['targetType']) && $data['targetType'] !== null) {
                $instance->targetType = $data['targetType'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['url']) && $data['url'] !== null) {
                $instance->url = $data['url'];
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
            if ($this->targetItemImage !== null) {
                $data['targetItemImage'] = $this->targetItemImage->asArray();
            }
            if ($this->targetType !== null) {
                $data['targetType'] = $this->targetType;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->url !== null) {
                $data['url'] = $this->url;
            }
            return $data;
        }
}
