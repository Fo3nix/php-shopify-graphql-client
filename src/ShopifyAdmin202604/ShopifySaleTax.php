<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyTaxLine;

/**
 * The tax allocated to a sale from a single tax line.
 */
class ShopifySaleTax
{
    protected $amount;
    protected $id;
    protected $taxLine;

    
    /**
     * The portion of the total tax amount on the related sale that comes from the associated tax line.
     *
     * @return ShopifyMoneyBag
     */
    public function getAmount(): ?ShopifyMoneyBag
    {
        return $this->amount;
    }

    
    /**
     * The unique ID for the sale tax.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The tax line associated with the sale.
     *
     * @return ShopifyTaxLine
     */
    public function getTaxLine(): ?ShopifyTaxLine
    {
        return $this->taxLine;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['amount']) && $data['amount'] !== null) {
                $instance->amount = ShopifyMoneyBag::fromArray($data['amount']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['taxLine']) && $data['taxLine'] !== null) {
                $instance->taxLine = ShopifyTaxLine::fromArray($data['taxLine']);
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->taxLine !== null) {
                $data['taxLine'] = $this->taxLine->asArray();
            }
            return $data;
        }
}
