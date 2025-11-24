<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

class ShopifyPaymentMandateResource
{
    protected $resourceId;
    protected $resourceType;

    
    /**
     * @return string
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    
    /**
     * @return ShopifyMandateResourceTypeEnumObject
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['resourceId']) && $data['resourceId'] !== null) {
                $instance->resourceId = $data['resourceId'];
            }
            if (isset($data['resourceType']) && $data['resourceType'] !== null) {
                $instance->resourceType = $data['resourceType'];
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
            if ($this->resourceId !== null) {
                $data['resourceId'] = $this->resourceId;
            }
            if ($this->resourceType !== null) {
                $data['resourceType'] = $this->resourceType;
            }
            return $data;
        }
}
