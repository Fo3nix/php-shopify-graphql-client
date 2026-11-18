<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyApp;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyRefund;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifySaleConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyStaffMember;

/**
 * An agreement between the merchant and customer to refund all or a portion of the order.
 */
class ShopifyRefundAgreement implements ShopifySalesAgreement
{
    protected $app;
    protected $happenedAt;
    protected $id;
    protected $reason;
    protected $refund;
    protected $sales;
    protected $user;

    
    /**
     * The application that created the agreement.
     *
     * @return ShopifyApp
     */
    public function getApp(): ?ShopifyApp
    {
        return $this->app;
    }

    
    /**
     * The date and time at which the agreement occurred.
     *
     * @return Carbon
     */
    public function getHappenedAt(): ?Carbon
    {
        return $this->happenedAt;
    }

    
    /**
     * The unique ID for the agreement.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The reason the agreement was created.
     *
     * @return string A ShopifyOrderActionTypeEnumObject value
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    
    /**
     * The refund associated with the agreement.
     *
     * @return ShopifyRefund
     */
    public function getRefund(): ?ShopifyRefund
    {
        return $this->refund;
    }

    
    /**
     * The sales associated with the agreement.
     *
     * @return ShopifySaleConnection
     */
    public function getSales(): ?ShopifySaleConnection
    {
        return $this->sales;
    }

    
    /**
     * The staff member associated with the agreement.
     *
     * @return ShopifyStaffMember
     */
    public function getUser(): ?ShopifyStaffMember
    {
        return $this->user;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['app']) && $data['app'] !== null) {
                $instance->app = ShopifyApp::fromArray($data['app']);
            }
            if (isset($data['happenedAt']) && $data['happenedAt'] !== null) {
                $instance->happenedAt = new Carbon($data['happenedAt']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['reason']) && $data['reason'] !== null) {
                $instance->reason = $data['reason'];
            }
            if (isset($data['refund']) && $data['refund'] !== null) {
                $instance->refund = ShopifyRefund::fromArray($data['refund']);
            }
            if (isset($data['sales']) && $data['sales'] !== null) {
                $instance->sales = ShopifySaleConnection::fromArray($data['sales']);
            }
            if (isset($data['user']) && $data['user'] !== null) {
                $instance->user = ShopifyStaffMember::fromArray($data['user']);
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
            if ($this->app !== null) {
                $data['app'] = $this->app->asArray();
            }
            if ($this->happenedAt !== null) {
                $data['happenedAt'] = $this->happenedAt->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->reason !== null) {
                $data['reason'] = $this->reason;
            }
            if ($this->refund !== null) {
                $data['refund'] = $this->refund->asArray();
            }
            if ($this->sales !== null) {
                $data['sales'] = $this->sales->asArray();
            }
            if ($this->user !== null) {
                $data['user'] = $this->user->asArray();
            }
            return $data;
        }
}
