<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DeliveryPromiseParticipantOwner;

class DeliveryPromiseParticipant
{
    protected $id;
    protected $owner;
    protected $ownerType;

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return DeliveryPromiseParticipantOwner
     */
    public function getOwner()
    {
        return $this->owner;
    }

    
    /**
     * @return DeliveryPromiseParticipantOwnerTypeEnumObject
     */
    public function getOwnerType()
    {
        return $this->ownerType;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['owner']) && $data['owner'] !== null) {
                $instance->owner = DeliveryPromiseParticipantOwner::fromArray($data['owner']);
            }
            if (isset($data['ownerType']) && $data['ownerType'] !== null) {
                $instance->ownerType = $data['ownerType'];
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->owner !== null) {
                $data['owner'] = $this->owner->asArray();
            }
            if ($this->ownerType !== null) {
                $data['ownerType'] = $this->ownerType;
            }
            return $data;
        }
}
