<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * The number of method definitions for a zone, separated into merchant-owned and participant definitions.
 */
class ShopifyDeliveryMethodDefinitionCounts
{
    protected $participantDefinitionsCount;
    protected $rateDefinitionsCount;

    
    /**
     * The number of participant method definitions for the specified zone.
     *
     * @return int
     */
    public function getParticipantDefinitionsCount(): ?int
    {
        return $this->participantDefinitionsCount;
    }

    
    /**
     * The number of merchant-defined method definitions for the specified zone.
     *
     * @return int
     */
    public function getRateDefinitionsCount(): ?int
    {
        return $this->rateDefinitionsCount;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['participantDefinitionsCount']) && $data['participantDefinitionsCount'] !== null) {
                $instance->participantDefinitionsCount = $data['participantDefinitionsCount'];
            }
            if (isset($data['rateDefinitionsCount']) && $data['rateDefinitionsCount'] !== null) {
                $instance->rateDefinitionsCount = $data['rateDefinitionsCount'];
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
            if ($this->participantDefinitionsCount !== null) {
                $data['participantDefinitionsCount'] = $this->participantDefinitionsCount;
            }
            if ($this->rateDefinitionsCount !== null) {
                $data['rateDefinitionsCount'] = $this->rateDefinitionsCount;
            }
            return $data;
        }
}
