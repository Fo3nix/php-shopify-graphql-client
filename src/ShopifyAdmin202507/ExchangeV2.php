<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ExchangeV2Additions;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Location;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Refund;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ExchangeV2Returns;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\StaffMember;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\OrderTransaction;

class ExchangeV2
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
     * @return ExchangeV2Additions
     */
    public function getAdditions()
    {
        return $this->additions;
    }

    
    /**
     * @return Carbon
     */
    public function getCompletedAt()
    {
        return $this->completedAt;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    
    /**
     * @return bool
     */
    public function getMirrored()
    {
        return $this->mirrored;
    }

    
    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    
    /**
     * @return Refund[]
     */
    public function getRefunds()
    {
        return $this->refunds;
    }

    
    /**
     * @return ExchangeV2Returns
     */
    public function getReturns()
    {
        return $this->returns;
    }

    
    /**
     * @return StaffMember
     */
    public function getStaffMember()
    {
        return $this->staffMember;
    }

    
    /**
     * @return MoneyBag
     */
    public function getTotalAmountProcessedSet()
    {
        return $this->totalAmountProcessedSet;
    }

    
    /**
     * @return MoneyBag
     */
    public function getTotalPriceSet()
    {
        return $this->totalPriceSet;
    }

    
    /**
     * @return OrderTransaction[]
     */
    public function getTransactions()
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
                $instance->additions = ExchangeV2Additions::fromArray($data['additions']);
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
                $instance->location = Location::fromArray($data['location']);
            }
            if (isset($data['mirrored']) && $data['mirrored'] !== null) {
                $instance->mirrored = $data['mirrored'];
            }
            if (isset($data['note']) && $data['note'] !== null) {
                $instance->note = $data['note'];
            }
            if (isset($data['refunds']) && $data['refunds'] !== null) {
                $instance->refunds = array_map(function($item) { return Refund::fromArray($item); }, $data['refunds']);
            }
            if (isset($data['returns']) && $data['returns'] !== null) {
                $instance->returns = ExchangeV2Returns::fromArray($data['returns']);
            }
            if (isset($data['staffMember']) && $data['staffMember'] !== null) {
                $instance->staffMember = StaffMember::fromArray($data['staffMember']);
            }
            if (isset($data['totalAmountProcessedSet']) && $data['totalAmountProcessedSet'] !== null) {
                $instance->totalAmountProcessedSet = MoneyBag::fromArray($data['totalAmountProcessedSet']);
            }
            if (isset($data['totalPriceSet']) && $data['totalPriceSet'] !== null) {
                $instance->totalPriceSet = MoneyBag::fromArray($data['totalPriceSet']);
            }
            if (isset($data['transactions']) && $data['transactions'] !== null) {
                $instance->transactions = array_map(function($item) { return OrderTransaction::fromArray($item); }, $data['transactions']);
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
