<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * The payment schedule for a payments account.
 */
class ShopifyShopifyPaymentsPayoutSchedule
{
    protected $interval;
    protected $monthlyAnchor;
    protected $weeklyAnchor;

    
    /**
     * The interval at which payouts are sent to the connected bank account.
     *
     * @return string A ShopifyShopifyPaymentsPayoutIntervalEnumObject value
     */
    public function getInterval(): ?string
    {
        return $this->interval;
    }

    
    /**
     * The day of the month funds will be paid out.
     *
     * The value can be any day of the month from the 1st to the 31st.
     * If the payment interval is set to monthly, this value will be used.
     * Payouts scheduled between 29-31st of the month are sent on the last day of shorter months.
     *
     * @return int
     */
    public function getMonthlyAnchor(): ?int
    {
        return $this->monthlyAnchor;
    }

    
    /**
     * The day of the week funds will be paid out.
     *
     * The value can be any weekday from Monday to Friday.
     * If the payment interval is set to weekly, this value will be used.
     *
     * @return string A ShopifyDayOfTheWeekEnumObject value
     */
    public function getWeeklyAnchor(): ?string
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
