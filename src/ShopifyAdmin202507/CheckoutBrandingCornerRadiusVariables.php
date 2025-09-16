<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class CheckoutBrandingCornerRadiusVariables
{
    protected $base;
    protected $large;
    protected $small;

    
    /**
     * @return int
     */
    public function getBase()
    {
        return $this->base;
    }

    
    /**
     * @return int
     */
    public function getLarge()
    {
        return $this->large;
    }

    
    /**
     * @return int
     */
    public function getSmall()
    {
        return $this->small;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['base']) && $data['base'] !== null) {
                $instance->base = $data['base'];
            }
            if (isset($data['large']) && $data['large'] !== null) {
                $instance->large = $data['large'];
            }
            if (isset($data['small']) && $data['small'] !== null) {
                $instance->small = $data['small'];
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
            if ($this->base !== null) {
                $data['base'] = $this->base;
            }
            if ($this->large !== null) {
                $data['large'] = $this->large;
            }
            if ($this->small !== null) {
                $data['small'] = $this->small;
            }
            return $data;
        }
}
