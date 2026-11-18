<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * Describes a capability that is enabled on a Metaobject Definition.
 */
class ShopifyStandardMetaobjectCapabilityTemplate
{
    protected $capabilityType;

    
    /**
     * The type of capability that's enabled for the metaobject definition.
     *
     * @return string A ShopifyMetaobjectCapabilityTypeEnumObject value
     */
    public function getCapabilityType(): ?string
    {
        return $this->capabilityType;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['capabilityType']) && $data['capabilityType'] !== null) {
                $instance->capabilityType = $data['capabilityType'];
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
            if ($this->capabilityType !== null) {
                $data['capabilityType'] = $this->capabilityType;
            }
            return $data;
        }
}
