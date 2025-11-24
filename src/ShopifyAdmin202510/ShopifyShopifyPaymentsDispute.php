<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyShopifyPaymentsDisputeEvidence;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyShopifyPaymentsDisputeReasonDetails;

class ShopifyShopifyPaymentsDispute
{
    protected $amount;
    protected $disputeEvidence;
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
     * @return ShopifyMoneyV2
     */
    public function getAmount()
    {
        return $this->amount;
    }

    
    /**
     * @return ShopifyShopifyPaymentsDisputeEvidence
     */
    public function getDisputeEvidence()
    {
        return $this->disputeEvidence;
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
     * @return ShopifyOrder
     */
    public function getOrder()
    {
        return $this->order;
    }

    
    /**
     * @return ShopifyShopifyPaymentsDisputeReasonDetails
     */
    public function getReasonDetails()
    {
        return $this->reasonDetails;
    }

    
    /**
     * @return ShopifyDisputeStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

    
    /**
     * @return ShopifyDisputeTypeEnumObject
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
                $instance->amount = ShopifyMoneyV2::fromArray($data['amount']);
            }
            if (isset($data['disputeEvidence']) && $data['disputeEvidence'] !== null) {
                $instance->disputeEvidence = ShopifyShopifyPaymentsDisputeEvidence::fromArray($data['disputeEvidence']);
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
                $instance->order = ShopifyOrder::fromArray($data['order']);
            }
            if (isset($data['reasonDetails']) && $data['reasonDetails'] !== null) {
                $instance->reasonDetails = ShopifyShopifyPaymentsDisputeReasonDetails::fromArray($data['reasonDetails']);
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
            if ($this->disputeEvidence !== null) {
                $data['disputeEvidence'] = $this->disputeEvidence->asArray();
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
