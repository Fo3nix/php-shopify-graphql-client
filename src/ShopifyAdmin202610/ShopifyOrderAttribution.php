<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * The attribution details for an order.
 */
class ShopifyOrderAttribution
{
    protected $displayName;
    protected $handle;
    protected $icon;

    
    /**
     * The display name of the attribution source.
     *
     * @return string
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    
    /**
     * An identifier for the attribution source.
     *
     * @return string
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    
    /**
     * Sanitized SVG content used as the attribution source icon.
     *
     * @return string
     */
    public function getIcon(): ?string
    {
        return $this->icon;
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
            return $data;
        }
}
