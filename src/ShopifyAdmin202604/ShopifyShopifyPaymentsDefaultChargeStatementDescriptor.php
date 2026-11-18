<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * The charge descriptors for a payments account.
 */
class ShopifyShopifyPaymentsDefaultChargeStatementDescriptor implements ShopifyShopifyPaymentsChargeStatementDescriptor
{
    protected $default;
    protected $prefix;

    
    /**
     * The default charge statement descriptor.
     *
     * @return string
     */
    public function getDefault(): ?string
    {
        return $this->default;
    }

    
    /**
     * The prefix of the statement descriptor.
     *
     * @return string
     */
    public function getPrefix(): ?string
    {
        return $this->prefix;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['default']) && $data['default'] !== null) {
                $instance->default = $data['default'];
            }
            if (isset($data['prefix']) && $data['prefix'] !== null) {
                $instance->prefix = $data['prefix'];
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
            if ($this->default !== null) {
                $data['default'] = $this->default;
            }
            if ($this->prefix !== null) {
                $data['prefix'] = $this->prefix;
            }
            return $data;
        }
}
