<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * A standardized reason for returning an item.
 *
 * - Shopify offers an expanded library of return reasons available to all merchants
 * - For each product, Shopify suggests a curated subset of reasons based on the product's category
 * - Suggested reasons aren't the only valid options. When creating a return via the API, you can use any reason from the [full library](https://shopify.dev/docs/api/admin-graphql/latest/queries/returnReasonDefinitions).
 */
class ShopifyReturnReasonDefinition implements ShopifyNode
{
    protected $deleted;
    protected $handle;
    protected $id;
    protected $name;

    
    /**
     * Whether the return reason has been removed from taxonomy.
     *
     * Deleted reasons should not be presented to customers when creating new returns, but may still
     * appear on existing returns that were created before the reason was deleted. This field enables
     * graceful deprecation of return reasons without breaking historical data.
     *
     * @return bool
     */
    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    
    /**
     * A unique, human-readable, stable identifier for the return reason.
     *
     * Example values include "arrived-late", "comfort", "too-tight", "color-too-bright", and "quality".
     * The handle remains consistent across API versions and localizations, making it suitable for programmatic use.
     *
     * @return string
     */
    public function getHandle(): ?string
    {
        return $this->handle;
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
     * The localized, user-facing name of the return reason.
     *
     * This field returns the reason name in the requested locale, automatically falling back to
     * English if no translation is available. Use this field when displaying return reasons to
     * customers or merchants.
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
            if (isset($data['deleted']) && $data['deleted'] !== null) {
                $instance->deleted = $data['deleted'];
            }
            if (isset($data['handle']) && $data['handle'] !== null) {
                $instance->handle = $data['handle'];
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
            if ($this->deleted !== null) {
                $data['deleted'] = $this->deleted;
            }
            if ($this->handle !== null) {
                $data['handle'] = $this->handle;
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
