<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\AppPlanV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\AppUsageRecordConnection;

class AppSubscriptionLineItem
{
    protected $id;
    protected $plan;
    protected $usageRecords;

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return AppPlanV2
     */
    public function getPlan()
    {
        return $this->plan;
    }

    
    /**
     * @return AppUsageRecordConnection
     */
    public function getUsageRecords()
    {
        return $this->usageRecords;
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
            if (isset($data['plan']) && $data['plan'] !== null) {
                $instance->plan = AppPlanV2::fromArray($data['plan']);
            }
            if (isset($data['usageRecords']) && $data['usageRecords'] !== null) {
                $instance->usageRecords = AppUsageRecordConnection::fromArray($data['usageRecords']);
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
            if ($this->plan !== null) {
                $data['plan'] = $this->plan->asArray();
            }
            if ($this->usageRecords !== null) {
                $data['usageRecords'] = $this->usageRecords->asArray();
            }
            return $data;
        }
}
