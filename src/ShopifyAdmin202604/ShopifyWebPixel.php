<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * The `WebPixel` object enables you to manage JavaScript code snippets
 * that run on an online store and collect
 * [behavioral data](https://shopify.dev/docs/api/web-pixels-api/standard-events)
 * for marketing campaign optimization and analytics.
 *
 * Learn how to create a
 * [web pixel extension](https://shopify.dev/docs/apps/build/marketing-analytics/build-web-pixels)
 * to subscribe your app to events that are emitted by Shopify.
 */
class ShopifyWebPixel implements ShopifyNode
{
    protected $id;
    protected $settings;

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The
     * [settings object](https://shopify.dev/docs/apps/build/marketing-analytics/build-web-pixels#step-2-define-your-web-pixel-settings)
     * for the web pixel. This object specifies configuration options that control the web pixel's functionality and behavior. You can find the settings for a web pixel in
     * `extensions/<your_extension_name>/shopify.extension.toml`.
     *
     * @return string
     */
    public function getSettings(): mixed
    {
        return $this->settings;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['settings']) && $data['settings'] !== null) {
                $instance->settings = $data['settings'];
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->settings !== null) {
                $data['settings'] = $this->settings;
            }
            return $data;
        }
}
