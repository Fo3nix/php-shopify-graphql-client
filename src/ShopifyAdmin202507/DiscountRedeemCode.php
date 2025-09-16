<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\App;

class DiscountRedeemCode
{
    protected $asyncUsageCount;
    protected $code;
    protected $createdBy;
    protected $id;

    
    /**
     * @return int
     */
    public function getAsyncUsageCount()
    {
        return $this->asyncUsageCount;
    }

    
    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    
    /**
     * @return App
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['asyncUsageCount']) && $data['asyncUsageCount'] !== null) {
                $instance->asyncUsageCount = $data['asyncUsageCount'];
            }
            if (isset($data['code']) && $data['code'] !== null) {
                $instance->code = $data['code'];
            }
            if (isset($data['createdBy']) && $data['createdBy'] !== null) {
                $instance->createdBy = App::fromArray($data['createdBy']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
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
            if ($this->asyncUsageCount !== null) {
                $data['asyncUsageCount'] = $this->asyncUsageCount;
            }
            if ($this->code !== null) {
                $data['code'] = $this->code;
            }
            if ($this->createdBy !== null) {
                $data['createdBy'] = $this->createdBy->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            return $data;
        }
}
