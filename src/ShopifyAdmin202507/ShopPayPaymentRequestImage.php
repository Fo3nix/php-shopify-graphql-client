<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class ShopPayPaymentRequestImage
{
    protected $alt;
    protected $url;

    
    /**
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

    
    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['alt']) && $data['alt'] !== null) {
                $instance->alt = $data['alt'];
            }
            if (isset($data['url']) && $data['url'] !== null) {
                $instance->url = $data['url'];
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
            if ($this->alt !== null) {
                $data['alt'] = $this->alt;
            }
            if ($this->url !== null) {
                $data['url'] = $this->url;
            }
            return $data;
        }
}
