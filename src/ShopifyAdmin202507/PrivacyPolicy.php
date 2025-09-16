<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class PrivacyPolicy
{
    protected $autoManaged;
    protected $supportedLocales;

    
    /**
     * @return bool
     */
    public function getAutoManaged()
    {
        return $this->autoManaged;
    }

    
    /**
     * @return string[]
     */
    public function getSupportedLocales()
    {
        return $this->supportedLocales;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['autoManaged']) && $data['autoManaged'] !== null) {
                $instance->autoManaged = $data['autoManaged'];
            }
            if (isset($data['supportedLocales']) && $data['supportedLocales'] !== null) {
                $instance->supportedLocales = $data['supportedLocales'];
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
            if ($this->autoManaged !== null) {
                $data['autoManaged'] = $this->autoManaged;
            }
            if ($this->supportedLocales !== null) {
                $data['supportedLocales'] = $this->supportedLocales;
            }
            return $data;
        }
}
