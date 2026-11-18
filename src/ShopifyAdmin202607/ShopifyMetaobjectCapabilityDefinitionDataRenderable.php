<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * The renderable capability data for the metaobject definition.
 */
class ShopifyMetaobjectCapabilityDefinitionDataRenderable
{
    protected $metaDescriptionKey;
    protected $metaTitleKey;

    
    /**
     * The metaobject field used as an alias for the SEO page description.
     *
     * @return string
     */
    public function getMetaDescriptionKey(): ?string
    {
        return $this->metaDescriptionKey;
    }

    
    /**
     * The metaobject field used as an alias for the SEO page title.
     *
     * @return string
     */
    public function getMetaTitleKey(): ?string
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
