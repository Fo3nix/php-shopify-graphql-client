<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * A payment mandate with resource information, representing the permission
 * the owner of the payment instrument gives to the merchant to debit it
 * for specific resources (e.g., Order, Subscriptions).
 */
class ShopifyPaymentMandateResource
{
    protected $id;
    protected $resourceId;
    protected $resourceType;

    
    /**
     * The unique ID of the payment mandate. Matches the corresponding `CustomerPaymentMethod.id` token, so partners can identify which payment method to use for a given mandate scope (e.g., SUBSCRIPTIONS).
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The ID of the resource that this payment method was created for.
     *
     * @return string
     */
    public function getResourceId(): ?string
    {
        return $this->resourceId;
    }

    
    /**
     * The resource type that this payment method was created for (e.g., Order, Subscriptions).
     *
     * @return string A ShopifyMandateResourceTypeEnumObject value
     */
    public function getResourceType(): ?string
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
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->resourceId !== null) {
                $data['resourceId'] = $this->resourceId;
            }
            if ($this->resourceType !== null) {
                $data['resourceType'] = $this->resourceType;
            }
            return $data;
        }
}
