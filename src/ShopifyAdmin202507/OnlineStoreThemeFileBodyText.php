<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class OnlineStoreThemeFileBodyText
{
    protected $content;

    
    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['content']) && $data['content'] !== null) {
                $instance->content = $data['content'];
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
            if ($this->content !== null) {
                $data['content'] = $this->content;
            }
            return $data;
        }
}
