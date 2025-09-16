<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class OnlineStoreThemeFileBodyBase64
{
    protected $contentBase64;

    
    /**
     * @return string
     */
    public function getContentBase64()
    {
        return $this->contentBase64;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['contentBase64']) && $data['contentBase64'] !== null) {
                $instance->contentBase64 = $data['contentBase64'];
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
            if ($this->contentBase64 !== null) {
                $data['contentBase64'] = $this->contentBase64;
            }
            return $data;
        }
}
