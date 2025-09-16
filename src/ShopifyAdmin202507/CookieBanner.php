<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Translation;

class CookieBanner
{
    protected $autoManaged;
    protected $enabled;
    protected $translations;

    
    /**
     * @return bool
     */
    public function getAutoManaged()
    {
        return $this->autoManaged;
    }

    
    /**
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    
    /**
     * @return Translation[]
     */
    public function getTranslations()
    {
        return $this->translations;
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
            if (isset($data['enabled']) && $data['enabled'] !== null) {
                $instance->enabled = $data['enabled'];
            }
            if (isset($data['translations']) && $data['translations'] !== null) {
                $instance->translations = array_map(function($item) { return Translation::fromArray($item); }, $data['translations']);
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
            if ($this->enabled !== null) {
                $data['enabled'] = $this->enabled;
            }
            if ($this->translations !== null) {
                $data['translations'] = array_map(function($item) { return $item->asArray(); }, $this->translations);
            }
            return $data;
        }
}
