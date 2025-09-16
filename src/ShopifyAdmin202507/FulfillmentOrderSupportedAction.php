<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class FulfillmentOrderSupportedAction
{
    protected $action;
    protected $externalUrl;

    
    /**
     * @return FulfillmentOrderActionEnumObject
     */
    public function getAction()
    {
        return $this->action;
    }

    
    /**
     * @return string
     */
    public function getExternalUrl()
    {
        return $this->externalUrl;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['action']) && $data['action'] !== null) {
                $instance->action = $data['action'];
            }
            if (isset($data['externalUrl']) && $data['externalUrl'] !== null) {
                $instance->externalUrl = $data['externalUrl'];
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
            if ($this->action !== null) {
                $data['action'] = $this->action;
            }
            if ($this->externalUrl !== null) {
                $data['externalUrl'] = $this->externalUrl;
            }
            return $data;
        }
}
