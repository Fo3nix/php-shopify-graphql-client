<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * An attribution definition that an app can use to label orders it routes to a shop.
 * Definitions can be supplied declaratively via the `order_attribution_config` extension or created
 * dynamically per-shop via the Admin API.
 * Learn more in the [order attribution guide](https://shopify.dev/docs/apps/build/sales-channels/order-attribution).
 */
class ShopifyOrderAttributionDefinition implements ShopifyNode
{
    protected $displayName;
    protected $handle;
    protected $icon;
    protected $id;

    
    /**
     * A human-readable name for the definition, displayed in Shopify Admin and on order details.
     *
     * @return string
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    
    /**
     * A unique identifier for the definition, scoped to the calling app on a single shop. Used as the `attribution_handle` value when an app attributes an order to this definition.
     *
     * @return string
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    
    /**
     * Sanitized SVG content used as the icon for orders attributed to this definition. May be null when no icon is provided.
     *
     * @return string
     */
    public function getIcon(): ?string
    {
        return $this->icon;
    }

    
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
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['displayName']) && $data['displayName'] !== null) {
                $instance->displayName = $data['displayName'];
            }
            if (isset($data['handle']) && $data['handle'] !== null) {
                $instance->handle = $data['handle'];
            }
            if (isset($data['icon']) && $data['icon'] !== null) {
                $instance->icon = $data['icon'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
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
            if ($this->displayName !== null) {
                $data['displayName'] = $this->displayName;
            }
            if ($this->handle !== null) {
                $data['handle'] = $this->handle;
            }
            if ($this->icon !== null) {
                $data['icon'] = $this->icon;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            return $data;
        }
}
