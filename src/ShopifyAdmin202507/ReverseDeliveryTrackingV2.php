<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class ReverseDeliveryTrackingV2
{
    protected $carrierName;
    protected $number;
    protected $url;

    
    /**
     * @return string
     */
    public function getCarrierName()
    {
        return $this->carrierName;
    }

    
    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
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
            if (isset($data['carrierName']) && $data['carrierName'] !== null) {
                $instance->carrierName = $data['carrierName'];
            }
            if (isset($data['number']) && $data['number'] !== null) {
                $instance->number = $data['number'];
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
            if ($this->carrierName !== null) {
                $data['carrierName'] = $this->carrierName;
            }
            if ($this->number !== null) {
                $data['number'] = $this->number;
            }
            if ($this->url !== null) {
                $data['url'] = $this->url;
            }
            return $data;
        }
}
