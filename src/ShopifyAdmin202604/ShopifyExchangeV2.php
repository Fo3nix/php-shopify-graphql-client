<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyExchangeV2Additions;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyLocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyRefund;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyExchangeV2Returns;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyStaffMember;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyOrderTransaction;

/**
 * An exchange where existing items on an order are returned and new items are added to the order.
 */
class ShopifyExchangeV2 implements ShopifyNode
{
    protected $additions;
    protected $completedAt;
    protected $createdAt;
    protected $id;
    protected $location;
    protected $mirrored;
    protected $note;
    protected $refunds;
    protected $returns;
    protected $staffMember;
    protected $totalAmountProcessedSet;
    protected $totalPriceSet;
    protected $transactions;

    
    /**
     * The details of the new items in the exchange.
     *
     * @return ShopifyExchangeV2Additions
     */
    public function getAdditions(): ?ShopifyExchangeV2Additions
    {
        return $this->additions;
    }

    
    /**
     * The date and time when the exchange was completed.
     *
     * @return Carbon
     */
    public function getCompletedAt(): ?Carbon
    {
        return $this->completedAt;
    }

    
    /**
     * The date and time when the exchange was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
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
     * The location where the exchange happened.
     *
     * @return ShopifyLocation
     */
    public function getLocation(): ?ShopifyLocation
    {
        return $this->location;
    }

    
    /**
     * Mirrored from Admin Exchanges.
     *
     * @return bool
     */
    public function getMirrored(): ?bool
    {
        return $this->mirrored;
    }

    
    /**
     * The text of an optional note that a shop owner can attach to the exchange.
     *
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    
    /**
     * The refunds processed during the exchange.
     *
     * @return ShopifyRefund[]
     */
    public function getRefunds(): ?array
    {
        return $this->refunds;
    }

    
    /**
     * The details of the returned items in the exchange.
     *
     * @return ShopifyExchangeV2Returns
     */
    public function getReturns(): ?ShopifyExchangeV2Returns
    {
        return $this->returns;
    }

    
    /**
     * The staff member associated with the exchange.
     *
     * @return ShopifyStaffMember
     */
    public function getStaffMember(): ?ShopifyStaffMember
    {
        return $this->staffMember;
    }

    
    /**
     * The amount of money that was paid or refunded as part of the exchange.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalAmountProcessedSet(): ?ShopifyMoneyBag
    {
        return $this->totalAmountProcessedSet;
    }

    
    /**
     * The difference in values of the items that were exchanged.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalPriceSet(): ?ShopifyMoneyBag
    {
        return $this->totalPriceSet;
    }

    
    /**
     * The order transactions related to the exchange.
     *
     * @return ShopifyOrderTransaction[]
     */
    public function getTransactions(): ?array
    {
        return $this->transactions;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['additions']) && $data['additions'] !== null) {
                $instance->additions = ShopifyExchangeV2Additions::fromArray($data['additions']);
            }
            if (isset($data['completedAt']) && $data['completedAt'] !== null) {
                $instance->completedAt = new Carbon($data['completedAt']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['location']) && $data['location'] !== null) {
                $instance->location = ShopifyLocation::fromArray($data['location']);
            }
            if (isset($data['mirrored']) && $data['mirrored'] !== null) {
                $instance->mirrored = $data['mirrored'];
            }
            if (isset($data['note']) && $data['note'] !== null) {
                $instance->note = $data['note'];
            }
            if (isset($data['refunds']) && $data['refunds'] !== null) {
                $instance->refunds = array_map(function($item) { return ShopifyRefund::fromArray($item); }, $data['refunds']);
            }
            if (isset($data['returns']) && $data['returns'] !== null) {
                $instance->returns = ShopifyExchangeV2Returns::fromArray($data['returns']);
            }
            if (isset($data['staffMember']) && $data['staffMember'] !== null) {
                $instance->staffMember = ShopifyStaffMember::fromArray($data['staffMember']);
            }
            if (isset($data['totalAmountProcessedSet']) && $data['totalAmountProcessedSet'] !== null) {
                $instance->totalAmountProcessedSet = ShopifyMoneyBag::fromArray($data['totalAmountProcessedSet']);
            }
            if (isset($data['totalPriceSet']) && $data['totalPriceSet'] !== null) {
                $instance->totalPriceSet = ShopifyMoneyBag::fromArray($data['totalPriceSet']);
            }
            if (isset($data['transactions']) && $data['transactions'] !== null) {
                $instance->transactions = array_map(function($item) { return ShopifyOrderTransaction::fromArray($item); }, $data['transactions']);
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
            if ($this->additions !== null) {
                $data['additions'] = $this->additions->asArray();
            }
            if ($this->completedAt !== null) {
                $data['completedAt'] = $this->completedAt->toIso8601String();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->location !== null) {
                $data['location'] = $this->location->asArray();
            }
            if ($this->mirrored !== null) {
                $data['mirrored'] = $this->mirrored;
            }
            if ($this->note !== null) {
                $data['note'] = $this->note;
            }
            if ($this->refunds !== null) {
                $data['refunds'] = array_map(function($item) { return $item->asArray(); }, $this->refunds);
            }
            if ($this->returns !== null) {
                $data['returns'] = $this->returns->asArray();
            }
            if ($this->staffMember !== null) {
                $data['staffMember'] = $this->staffMember->asArray();
            }
            if ($this->totalAmountProcessedSet !== null) {
                $data['totalAmountProcessedSet'] = $this->totalAmountProcessedSet->asArray();
            }
            if ($this->totalPriceSet !== null) {
                $data['totalPriceSet'] = $this->totalPriceSet->asArray();
            }
            if ($this->transactions !== null) {
                $data['transactions'] = array_map(function($item) { return $item->asArray(); }, $this->transactions);
            }
            return $data;
        }
}
