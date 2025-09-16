<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class MetaobjectCapabilityDefinitionDataRenderable
{
    protected $metaDescriptionKey;
    protected $metaTitleKey;

    
    /**
     * @return string
     */
    public function getMetaDescriptionKey()
    {
        return $this->metaDescriptionKey;
    }

    
    /**
     * @return string
     */
    public function getMetaTitleKey()
    {
        return $this->metaTitleKey;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['metaDescriptionKey']) && $data['metaDescriptionKey'] !== null) {
                $instance->metaDescriptionKey = $data['metaDescriptionKey'];
            }
            if (isset($data['metaTitleKey']) && $data['metaTitleKey'] !== null) {
                $instance->metaTitleKey = $data['metaTitleKey'];
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
            if ($this->metaDescriptionKey !== null) {
                $data['metaDescriptionKey'] = $this->metaDescriptionKey;
            }
            if ($this->metaTitleKey !== null) {
                $data['metaTitleKey'] = $this->metaTitleKey;
            }
            return $data;
        }
}
