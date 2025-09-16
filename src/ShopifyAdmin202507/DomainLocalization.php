<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class DomainLocalization
{
    protected $alternateLocales;
    protected $country;
    protected $defaultLocale;

    
    /**
     * @return string[]
     */
    public function getAlternateLocales()
    {
        return $this->alternateLocales;
    }

    
    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    
    /**
     * @return string
     */
    public function getDefaultLocale()
    {
        return $this->defaultLocale;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['alternateLocales']) && $data['alternateLocales'] !== null) {
                $instance->alternateLocales = $data['alternateLocales'];
            }
            if (isset($data['country']) && $data['country'] !== null) {
                $instance->country = $data['country'];
            }
            if (isset($data['defaultLocale']) && $data['defaultLocale'] !== null) {
                $instance->defaultLocale = $data['defaultLocale'];
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
            if ($this->alternateLocales !== null) {
                $data['alternateLocales'] = $this->alternateLocales;
            }
            if ($this->country !== null) {
                $data['country'] = $this->country;
            }
            if ($this->defaultLocale !== null) {
                $data['defaultLocale'] = $this->defaultLocale;
            }
            return $data;
        }
}
