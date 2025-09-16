<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Order;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopifyPaymentsDisputeReasonDetails;

class ShopifyPaymentsDispute
{
    protected $amount;
    protected $evidenceDueBy;
    protected $evidenceSentOn;
    protected $finalizedOn;
    protected $id;
    protected $initiatedAt;
    protected $legacyResourceId;
    protected $order;
    protected $reasonDetails;
    protected $status;
    protected $type;

    
    /**
     * @return MoneyV2
     */
    public function getAmount()
    {
        return $this->amount;
    }

    
    /**
     * @return Carbon
     */
    public function getEvidenceDueBy()
    {
        return $this->evidenceDueBy;
    }

    
    /**
     * @return Carbon
     */
    public function getEvidenceSentOn()
    {
        return $this->evidenceSentOn;
    }

    
    /**
     * @return Carbon
     */
    public function getFinalizedOn()
    {
        return $this->finalizedOn;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return Carbon
     */
    public function getInitiatedAt()
    {
        return $this->initiatedAt;
    }

    
    /**
     * @return string
     */
    public function getLegacyResourceId()
    {
        return $this->legacyResourceId;
    }

    
    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    
    /**
     * @return ShopifyPaymentsDisputeReasonDetails
     */
    public function getReasonDetails()
    {
        return $this->reasonDetails;
    }

    
    /**
     * @return DisputeStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

    
    /**
     * @return DisputeTypeEnumObject
     */
    public function getType()
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
            if (isset($data['amount']) && $data['amount'] !== null) {
                $instance->amount = MoneyV2::fromArray($data['amount']);
            }
            if (isset($data['evidenceDueBy']) && $data['evidenceDueBy'] !== null) {
                $instance->evidenceDueBy = new Carbon($data['evidenceDueBy']);
            }
            if (isset($data['evidenceSentOn']) && $data['evidenceSentOn'] !== null) {
                $instance->evidenceSentOn = new Carbon($data['evidenceSentOn']);
            }
            if (isset($data['finalizedOn']) && $data['finalizedOn'] !== null) {
                $instance->finalizedOn = new Carbon($data['finalizedOn']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['initiatedAt']) && $data['initiatedAt'] !== null) {
                $instance->initiatedAt = new Carbon($data['initiatedAt']);
            }
            if (isset($data['legacyResourceId']) && $data['legacyResourceId'] !== null) {
                $instance->legacyResourceId = $data['legacyResourceId'];
            }
            if (isset($data['order']) && $data['order'] !== null) {
                $instance->order = Order::fromArray($data['order']);
            }
            if (isset($data['reasonDetails']) && $data['reasonDetails'] !== null) {
                $instance->reasonDetails = ShopifyPaymentsDisputeReasonDetails::fromArray($data['reasonDetails']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
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
            if ($this->amount !== null) {
                $data['amount'] = $this->amount->asArray();
            }
            if ($this->evidenceDueBy !== null) {
                $data['evidenceDueBy'] = $this->evidenceDueBy->toIso8601String();
            }
            if ($this->evidenceSentOn !== null) {
                $data['evidenceSentOn'] = $this->evidenceSentOn->toIso8601String();
            }
            if ($this->finalizedOn !== null) {
                $data['finalizedOn'] = $this->finalizedOn->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->initiatedAt !== null) {
                $data['initiatedAt'] = $this->initiatedAt->toIso8601String();
            }
            if ($this->legacyResourceId !== null) {
                $data['legacyResourceId'] = $this->legacyResourceId;
            }
            if ($this->order !== null) {
                $data['order'] = $this->order->asArray();
            }
            if ($this->reasonDetails !== null) {
                $data['reasonDetails'] = $this->reasonDetails->asArray();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            return $data;
        }
}
