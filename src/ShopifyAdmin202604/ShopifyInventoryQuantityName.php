<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * Details about an individual quantity name.
 */
class ShopifyInventoryQuantityName
{
    protected $belongsTo;
    protected $comprises;
    protected $displayName;
    protected $isInUse;
    protected $name;

    
    /**
     * List of quantity names that this quantity name belongs to.
     *
     * @return string[]
     */
    public function getBelongsTo(): ?array
    {
        return $this->belongsTo;
    }

    
    /**
     * List of quantity names that comprise this quantity name.
     *
     * @return string[]
     */
    public function getComprises(): ?array
    {
        return $this->comprises;
    }

    
    /**
     * The display name for quantity names translated into applicable language.
     *
     * @return string
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    
    /**
     * Whether the quantity name has been used by the merchant.
     *
     * @return bool
     */
    public function getIsInUse(): ?bool
    {
        return $this->isInUse;
    }

    
    /**
     * The [name](https://shopify.dev/docs/apps/fulfillment/inventory-management-apps#inventory-states) of
     * the inventory quantity. Used by
     * [inventory queries and mutations](https://shopify.dev/docs/apps/fulfillment/inventory-management-apps#graphql-queries-and-mutations).
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
            if (isset($data['belongsTo']) && $data['belongsTo'] !== null) {
                $instance->belongsTo = $data['belongsTo'];
            }
            if (isset($data['comprises']) && $data['comprises'] !== null) {
                $instance->comprises = $data['comprises'];
            }
            if (isset($data['displayName']) && $data['displayName'] !== null) {
                $instance->displayName = $data['displayName'];
            }
            if (isset($data['isInUse']) && $data['isInUse'] !== null) {
                $instance->isInUse = $data['isInUse'];
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
            if ($this->belongsTo !== null) {
                $data['belongsTo'] = $this->belongsTo;
            }
            if ($this->comprises !== null) {
                $data['comprises'] = $this->comprises;
            }
            if ($this->displayName !== null) {
                $data['displayName'] = $this->displayName;
            }
            if ($this->isInUse !== null) {
                $data['isInUse'] = $this->isInUse;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            return $data;
        }
}
