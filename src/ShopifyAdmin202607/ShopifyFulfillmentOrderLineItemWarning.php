<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * A fulfillment order line item warning. For example, a warning about why a fulfillment request was rejected.
 */
class ShopifyFulfillmentOrderLineItemWarning
{
    protected $description;
    protected $title;

    
    /**
     * The description of warning.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    
    /**
     * The title of warning.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
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
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            return $data;
        }
}
