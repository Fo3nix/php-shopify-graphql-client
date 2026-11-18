<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPointOfSaleDevicePaymentSession;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyStaffMember;
use Carbon\Carbon;

/**
 * A cash count activity.
 */
class ShopifyCashCountActivity implements ShopifyCashActivity
{
    protected $cash;
    protected $cashCounted;
    protected $cashDiscrepancy;
    protected $cashExpected;
    protected $paymentSession;
    protected $staffMember;
    protected $time;
    protected $type;

    
    /**
     * The amount of cash added or removed as part of the activity.
     *
     * @return ShopifyMoneyV2
     */
    public function getCash(): ?ShopifyMoneyV2
    {
        return $this->cash;
    }

    
    /**
     * The amount of cash counted during the activity.
     *
     * @return ShopifyMoneyV2
     */
    public function getCashCounted(): ?ShopifyMoneyV2
    {
        return $this->cashCounted;
    }

    
    /**
     * The discrepancy between the counted and expected cash amounts.
     *
     * @return ShopifyMoneyV2
     */
    public function getCashDiscrepancy(): ?ShopifyMoneyV2
    {
        return $this->cashDiscrepancy;
    }

    
    /**
     * The expected amount of cash in the drawer at the time of the activity.
     *
     * @return ShopifyMoneyV2
     */
    public function getCashExpected(): ?ShopifyMoneyV2
    {
        return $this->cashExpected;
    }

    
    /**
     * The point of sale device payment session associated with the activity.
     *
     * @return ShopifyPointOfSaleDevicePaymentSession
     */
    public function getPaymentSession(): ?ShopifyPointOfSaleDevicePaymentSession
    {
        return $this->paymentSession;
    }

    
    /**
     * The staff member who performed the activity.
     *
     * @return ShopifyStaffMember
     */
    public function getStaffMember(): ?ShopifyStaffMember
    {
        return $this->staffMember;
    }

    
    /**
     * The time at which the activity occurred.
     *
     * @return Carbon
     */
    public function getTime(): ?Carbon
    {
        return $this->time;
    }

    
    /**
     * The type of count activity.
     *
     * @return string A ShopifyCashCountActivityTypeEnumObject value
     */
    public function getType(): ?string
    {
        return $this->type;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['cash']) && $data['cash'] !== null) {
                $instance->cash = ShopifyMoneyV2::fromArray($data['cash']);
            }
            if (isset($data['cashCounted']) && $data['cashCounted'] !== null) {
                $instance->cashCounted = ShopifyMoneyV2::fromArray($data['cashCounted']);
            }
            if (isset($data['cashDiscrepancy']) && $data['cashDiscrepancy'] !== null) {
                $instance->cashDiscrepancy = ShopifyMoneyV2::fromArray($data['cashDiscrepancy']);
            }
            if (isset($data['cashExpected']) && $data['cashExpected'] !== null) {
                $instance->cashExpected = ShopifyMoneyV2::fromArray($data['cashExpected']);
            }
            if (isset($data['paymentSession']) && $data['paymentSession'] !== null) {
                $instance->paymentSession = ShopifyPointOfSaleDevicePaymentSession::fromArray($data['paymentSession']);
            }
            if (isset($data['staffMember']) && $data['staffMember'] !== null) {
                $instance->staffMember = ShopifyStaffMember::fromArray($data['staffMember']);
            }
            if (isset($data['time']) && $data['time'] !== null) {
                $instance->time = new Carbon($data['time']);
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
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
            if ($this->cash !== null) {
                $data['cash'] = $this->cash->asArray();
            }
            if ($this->cashCounted !== null) {
                $data['cashCounted'] = $this->cashCounted->asArray();
            }
            if ($this->cashDiscrepancy !== null) {
                $data['cashDiscrepancy'] = $this->cashDiscrepancy->asArray();
            }
            if ($this->cashExpected !== null) {
                $data['cashExpected'] = $this->cashExpected->asArray();
            }
            if ($this->paymentSession !== null) {
                $data['paymentSession'] = $this->paymentSession->asArray();
            }
            if ($this->staffMember !== null) {
                $data['staffMember'] = $this->staffMember->asArray();
            }
            if ($this->time !== null) {
                $data['time'] = $this->time->toIso8601String();
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            return $data;
        }
}
