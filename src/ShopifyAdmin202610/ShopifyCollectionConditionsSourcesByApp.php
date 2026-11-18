<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCollectionConditionsSourceConnection;

/**
 * An app together with the shareable collection sources it publishes for the shop.
 */
class ShopifyCollectionConditionsSourcesByApp
{
    protected $app;
    protected $sources;

    
    /**
     * The app that publishes the collection sources.
     *
     * @return ShopifyApp
     */
    public function getApp(): ?ShopifyApp
    {
        return $this->app;
    }

    
    /**
     * The shareable collection sources owned by this app.
     *
     * @return ShopifyCollectionConditionsSourceConnection
     */
    public function getSources(): ?ShopifyCollectionConditionsSourceConnection
    {
        return $this->sources;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['app']) && $data['app'] !== null) {
                $instance->app = ShopifyApp::fromArray($data['app']);
            }
            if (isset($data['sources']) && $data['sources'] !== null) {
                $instance->sources = ShopifyCollectionConditionsSourceConnection::fromArray($data['sources']);
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
            if ($this->app !== null) {
                $data['app'] = $this->app->asArray();
            }
            if ($this->sources !== null) {
                $data['sources'] = $this->sources->asArray();
            }
            return $data;
        }
}
