<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopifyPaymentsDisputeEvidence;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopifyPaymentsDisputeReasonDetails;

/**
 * A dispute occurs when a buyer questions the legitimacy of a charge with their financial institution.
 */
class ShopifyShopifyPaymentsDispute implements ShopifyLegacyInteroperability, ShopifyNode
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
     * The total amount disputed by the cardholder.
     *
     * @return ShopifyMoneyV2
     */
    public function getAmount(): ?ShopifyMoneyV2
    {
        return $this->amount;
    }

    
    /**
     * The evidence associated with the dispute.
     *
     * @return ShopifyShopifyPaymentsDisputeEvidence
     */
    public function getDisputeEvidence(): ?ShopifyShopifyPaymentsDisputeEvidence
    {
        return $this->disputeEvidence;
    }

    
    /**
     * The deadline for evidence submission.
     *
     * @return Carbon
     */
    public function getEvidenceDueBy(): ?Carbon
    {
        return $this->evidenceDueBy;
    }

    
    /**
     * The date when evidence was sent. Returns null if evidence hasn't yet been sent.
     *
     * @return Carbon
     */
    public function getEvidenceSentOn(): ?Carbon
    {
        return $this->evidenceSentOn;
    }

    
    /**
     * The date when this dispute was resolved. Returns null if the dispute isn't yet resolved.
     *
     * @return Carbon
     */
    public function getFinalizedOn(): ?Carbon
    {
        return $this->finalizedOn;
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
     * The date when this dispute was initiated.
     *
     * @return Carbon
     */
    public function getInitiatedAt(): ?Carbon
    {
        return $this->initiatedAt;
    }

    
    /**
     * The ID of the corresponding resource in the REST Admin API.
     *
     * @return string
     */
    public function getLegacyResourceId(): mixed
    {
        return $this->legacyResourceId;
    }

    
    /**
     * The order that contains the charge that's under dispute.
     *
     * @return ShopifyOrder
     */
    public function getOrder(): ?ShopifyOrder
    {
        return $this->order;
    }

    
    /**
     * The reason of the dispute.
     *
     * @return ShopifyShopifyPaymentsDisputeReasonDetails
     */
    public function getReasonDetails(): ?ShopifyShopifyPaymentsDisputeReasonDetails
    {
        return $this->reasonDetails;
    }

    
    /**
     * The current state of the dispute.
     *
     * @return string A ShopifyDisputeStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * Indicates if this dispute is still in the inquiry phase or has turned into a chargeback.
     *
     * @return string A ShopifyDisputeTypeEnumObject value
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
