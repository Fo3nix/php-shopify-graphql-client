<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyStaffMember;
use Carbon\Carbon;

/**
 * Tracks an adjustment to the cash in a cash tracking session for a point of sale device over the course of a shift.
 */
class ShopifyCashTrackingAdjustment implements ShopifyNode
{
    protected $cash;
    protected $id;
    protected $note;
    protected $staffMember;
    protected $time;

    
    /**
     * The amount of cash being added or removed.
     *
     * @return ShopifyMoneyV2
     */
    public function getCash(): ?ShopifyMoneyV2
    {
        return $this->cash;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The note entered when the adjustment was made.
     *
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    
    /**
     * The staff member who made the adjustment.
     *
     * @return ShopifyStaffMember
     */
    public function getStaffMember(): ?ShopifyStaffMember
    {
        return $this->staffMember;
    }

    
    /**
     * The time when the adjustment was made.
     *
     * @return Carbon
     */
    public function getTime(): ?Carbon
    {
        return $this->time;
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
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['note']) && $data['note'] !== null) {
                $instance->note = $data['note'];
            }
            if (isset($data['staffMember']) && $data['staffMember'] !== null) {
                $instance->staffMember = ShopifyStaffMember::fromArray($data['staffMember']);
            }
            if (isset($data['time']) && $data['time'] !== null) {
                $instance->time = new Carbon($data['time']);
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->note !== null) {
                $data['note'] = $this->note;
            }
            if ($this->staffMember !== null) {
                $data['staffMember'] = $this->staffMember->asArray();
            }
            if ($this->time !== null) {
                $data['time'] = $this->time->toIso8601String();
            }
            return $data;
        }
}
