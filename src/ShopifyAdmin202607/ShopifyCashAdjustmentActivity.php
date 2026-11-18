<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyGiftCard;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPointOfSaleDevicePaymentSession;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCashManagementReasonCodeHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyStaffMember;
use Carbon\Carbon;

/**
 * A cash adjustment activity.
 */
class ShopifyCashAdjustmentActivity implements ShopifyCashActivity
{
    protected $cash;
    protected $giftCard;
    protected $note;
    protected $paymentSession;
    protected $reasonCode;
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
     * The gift card associated with the activity.
     *
     * @return ShopifyGiftCard
     */
    public function getGiftCard(): ?ShopifyGiftCard
    {
        return $this->giftCard;
    }

    
    /**
     * A note associated with the activity.
     *
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
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
     * The reason code for the activity.
     *
     * @return ShopifyCashManagementCustomReasonCode|ShopifyCashManagementDefaultReasonCode|ShopifyCashManagementSystemReasonCode
     */
    public function getReasonCode(): ShopifyCashManagementCustomReasonCode|ShopifyCashManagementDefaultReasonCode|ShopifyCashManagementSystemReasonCode|null
    {
        return $this->reasonCode;
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
     * The type of adjustment activity.
     *
     * @return string A ShopifyCashAdjustmentActivityTypeEnumObject value
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
            if (isset($data['giftCard']) && $data['giftCard'] !== null) {
                $instance->giftCard = ShopifyGiftCard::fromArray($data['giftCard']);
            }
            if (isset($data['note']) && $data['note'] !== null) {
                $instance->note = $data['note'];
            }
            if (isset($data['paymentSession']) && $data['paymentSession'] !== null) {
                $instance->paymentSession = ShopifyPointOfSaleDevicePaymentSession::fromArray($data['paymentSession']);
            }
            if (isset($data['reasonCode']) && $data['reasonCode'] !== null) {
                $instance->reasonCode = ShopifyCashManagementReasonCodeHydrator::fromArray($data['reasonCode']);
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
            if ($this->giftCard !== null) {
                $data['giftCard'] = $this->giftCard->asArray();
            }
            if ($this->note !== null) {
                $data['note'] = $this->note;
            }
            if ($this->paymentSession !== null) {
                $data['paymentSession'] = $this->paymentSession->asArray();
            }
            if ($this->reasonCode !== null) {
                $data['reasonCode'] = ShopifyCashManagementReasonCodeHydrator::toArray($this->reasonCode);
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
