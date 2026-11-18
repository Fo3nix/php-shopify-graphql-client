<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCustomerVisit;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCustomerMomentConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCount;

/**
 * A [`CustomerJourney`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CustomerJourney) through the online store leading up to an [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order). Tracks session data, attribution sources, and the timeline from first visit to purchase conversion.
 *
 * The summary includes the customer's position in their order history, days between first visit and order creation, and details about their first and last sessions. Use the [`moments`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CustomerJourneySummary#field-moments) connection to access the complete timeline of customer interactions before the purchase.
 */
class ShopifyCustomerJourneySummary
{
    protected $customerOrderIndex;
    protected $daysToConversion;
    protected $firstVisit;
    protected $lastVisit;
    protected $moments;
    protected $momentsCount;
    protected $ready;

    
    /**
     * The position of the current order within the customer's order history. Test orders aren't included.
     *
     * @return int
     */
    public function getCustomerOrderIndex(): ?int
    {
        return $this->customerOrderIndex;
    }

    
    /**
     * The number of days between the first session and the order creation date. The first session represents the first session since the last order, or the first session within the 30 day attribution window, if more than 30 days have passed since the last order.
     *
     * @return int
     */
    public function getDaysToConversion(): ?int
    {
        return $this->daysToConversion;
    }

    
    /**
     * The customer's first session going into the shop.
     *
     * @return ShopifyCustomerVisit
     */
    public function getFirstVisit(): ?ShopifyCustomerVisit
    {
        return $this->firstVisit;
    }

    
    /**
     * The last session before an order is made.
     *
     * @return ShopifyCustomerVisit
     */
    public function getLastVisit(): ?ShopifyCustomerVisit
    {
        return $this->lastVisit;
    }

    
    /**
     * The events preceding a customer's order, such as shop sessions.
     *
     * @return ShopifyCustomerMomentConnection
     */
    public function getMoments(): ?ShopifyCustomerMomentConnection
    {
        return $this->moments;
    }

    
    /**
     * The total number of customer moments associated with this order. Returns null if the order is still in the process of being attributed.
     *
     * @return ShopifyCount
     */
    public function getMomentsCount(): ?ShopifyCount
    {
        return $this->momentsCount;
    }

    
    /**
     * Whether the attributed sessions for the order have been created yet.
     *
     * @return bool
     */
    public function getReady(): ?bool
    {
        return $this->ready;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['customerOrderIndex']) && $data['customerOrderIndex'] !== null) {
                $instance->customerOrderIndex = $data['customerOrderIndex'];
            }
            if (isset($data['daysToConversion']) && $data['daysToConversion'] !== null) {
                $instance->daysToConversion = $data['daysToConversion'];
            }
            if (isset($data['firstVisit']) && $data['firstVisit'] !== null) {
                $instance->firstVisit = ShopifyCustomerVisit::fromArray($data['firstVisit']);
            }
            if (isset($data['lastVisit']) && $data['lastVisit'] !== null) {
                $instance->lastVisit = ShopifyCustomerVisit::fromArray($data['lastVisit']);
            }
            if (isset($data['moments']) && $data['moments'] !== null) {
                $instance->moments = ShopifyCustomerMomentConnection::fromArray($data['moments']);
            }
            if (isset($data['momentsCount']) && $data['momentsCount'] !== null) {
                $instance->momentsCount = ShopifyCount::fromArray($data['momentsCount']);
            }
            if (isset($data['ready']) && $data['ready'] !== null) {
                $instance->ready = $data['ready'];
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
            if ($this->customerOrderIndex !== null) {
                $data['customerOrderIndex'] = $this->customerOrderIndex;
            }
            if ($this->daysToConversion !== null) {
                $data['daysToConversion'] = $this->daysToConversion;
            }
            if ($this->firstVisit !== null) {
                $data['firstVisit'] = $this->firstVisit->asArray();
            }
            if ($this->lastVisit !== null) {
                $data['lastVisit'] = $this->lastVisit->asArray();
            }
            if ($this->moments !== null) {
                $data['moments'] = $this->moments->asArray();
            }
            if ($this->momentsCount !== null) {
                $data['momentsCount'] = $this->momentsCount->asArray();
            }
            if ($this->ready !== null) {
                $data['ready'] = $this->ready;
            }
            return $data;
        }
}
