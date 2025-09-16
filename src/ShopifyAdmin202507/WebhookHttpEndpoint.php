<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class WebhookHttpEndpoint
{
    protected $callbackUrl;

    
    /**
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['callbackUrl']) && $data['callbackUrl'] !== null) {
                $instance->callbackUrl = $data['callbackUrl'];
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
            if ($this->callbackUrl !== null) {
                $data['callbackUrl'] = $this->callbackUrl;
            }
            return $data;
        }
}
