<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyImage;

/**
 * Identifies the [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App) that created an order. Common sources include "online store" for web purchases, "Point of Sale" for in-person sales, or custom app names for orders created through third-party integrations.
 *
 * Use this information to track order attribution, analyze sales channels, and route orders to appropriate fulfillment workflows based on their source.
 */
class ShopifyOrderApp
{
    protected $icon;
    protected $id;
    protected $name;

    
    /**
     * The application icon.
     *
     * @return ShopifyImage
     */
    public function getIcon(): ?ShopifyImage
    {
        return $this->icon;
    }

    
    /**
     * The application ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The name of the application.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['icon']) && $data['icon'] !== null) {
                $instance->icon = ShopifyImage::fromArray($data['icon']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
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
            if ($this->icon !== null) {
                $data['icon'] = $this->icon->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            return $data;
        }
}
