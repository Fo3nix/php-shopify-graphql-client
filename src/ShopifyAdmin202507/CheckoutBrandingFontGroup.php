<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class CheckoutBrandingFontGroup
{
    protected $base;
    protected $bold;
    protected $loadingStrategy;
    protected $name;

    
    /**
     * @return mixed
     */
    public function getBase()
    {
        return $this->base;
    }

    
    /**
     * @return mixed
     */
    public function getBold()
    {
        return $this->bold;
    }

    
    /**
     * @return CheckoutBrandingFontLoadingStrategyEnumObject
     */
    public function getLoadingStrategy()
    {
        return $this->loadingStrategy;
    }

    
    /**
     * @return string
     */
    public function getName()
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
            if (isset($data['base']) && $data['base'] !== null) {
                $instance->base = $data['base'];
            }
            if (isset($data['bold']) && $data['bold'] !== null) {
                $instance->bold = $data['bold'];
            }
            if (isset($data['loadingStrategy']) && $data['loadingStrategy'] !== null) {
                $instance->loadingStrategy = $data['loadingStrategy'];
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
            if ($this->base !== null) {
                $data['base'] = $this->base;
            }
            if ($this->bold !== null) {
                $data['bold'] = $this->bold;
            }
            if ($this->loadingStrategy !== null) {
                $data['loadingStrategy'] = $this->loadingStrategy;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            return $data;
        }
}
