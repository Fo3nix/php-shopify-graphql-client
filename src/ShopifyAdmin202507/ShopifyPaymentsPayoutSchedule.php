<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class ShopifyPaymentsPayoutSchedule
{
    protected $interval;
    protected $monthlyAnchor;
    protected $weeklyAnchor;

    
    /**
     * @return ShopifyPaymentsPayoutIntervalEnumObject
     */
    public function getInterval()
    {
        return $this->interval;
    }

    
    /**
     * @return int
     */
    public function getMonthlyAnchor()
    {
        return $this->monthlyAnchor;
    }

    
    /**
     * @return DayOfTheWeekEnumObject
     */
    public function getWeeklyAnchor()
    {
        return $this->weeklyAnchor;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['interval']) && $data['interval'] !== null) {
                $instance->interval = $data['interval'];
            }
            if (isset($data['monthlyAnchor']) && $data['monthlyAnchor'] !== null) {
                $instance->monthlyAnchor = $data['monthlyAnchor'];
            }
            if (isset($data['weeklyAnchor']) && $data['weeklyAnchor'] !== null) {
                $instance->weeklyAnchor = $data['weeklyAnchor'];
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
            if ($this->interval !== null) {
                $data['interval'] = $this->interval;
            }
            if ($this->monthlyAnchor !== null) {
                $data['monthlyAnchor'] = $this->monthlyAnchor;
            }
            if ($this->weeklyAnchor !== null) {
                $data['weeklyAnchor'] = $this->weeklyAnchor;
            }
            return $data;
        }
}
