<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDeliveryPromiseParticipantOwnerHydrator;

/**
 * Returns enabled delivery promise participants.
 */
class ShopifyDeliveryPromiseParticipant implements ShopifyNode
{
    protected $id;
    protected $owner;
    protected $ownerType;

    
    /**
     * The ID of the promise participant.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The resource that the participant is attached to.
     *
     * @return ShopifyProductVariant
     */
    public function getOwner(): ?ShopifyProductVariant
    {
        return $this->owner;
    }

    
    /**
     * The owner type of the participant.
     *
     * @return string A ShopifyDeliveryPromiseParticipantOwnerTypeEnumObject value
     */
    public function getOwnerType(): ?string
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
                $instance->owner = ShopifyDeliveryPromiseParticipantOwnerHydrator::fromArray($data['owner']);
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
                $data['owner'] = ShopifyDeliveryPromiseParticipantOwnerHydrator::toArray($this->owner);
            }
            if ($this->ownerType !== null) {
                $data['ownerType'] = $this->ownerType;
            }
            return $data;
        }
}
