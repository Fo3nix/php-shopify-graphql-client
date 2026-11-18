<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * Represents the payment terms template object.
 */
class ShopifyPaymentTermsTemplate implements ShopifyNode
{
    protected $description;
    protected $dueInDays;
    protected $id;
    protected $name;
    protected $paymentTermsType;
    protected $translatedName;

    
    /**
     * The description of the payment terms template.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    
    /**
     * The number of days between the issued date and due date if this is the net type of payment terms.
     *
     * @return int
     */
    public function getDueInDays(): ?int
    {
        return $this->dueInDays;
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
     * The name of the payment terms template.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The type of the payment terms template.
     *
     * @return string A ShopifyPaymentTermsTypeEnumObject value
     */
    public function getPaymentTermsType(): ?string
    {
        return $this->paymentTermsType;
    }

    
    /**
     * The translated payment terms template name.
     *
     * @return string
     */
    public function getTranslatedName(): ?string
    {
        return $this->translatedName;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['dueInDays']) && $data['dueInDays'] !== null) {
                $instance->dueInDays = $data['dueInDays'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['paymentTermsType']) && $data['paymentTermsType'] !== null) {
                $instance->paymentTermsType = $data['paymentTermsType'];
            }
            if (isset($data['translatedName']) && $data['translatedName'] !== null) {
                $instance->translatedName = $data['translatedName'];
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
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->dueInDays !== null) {
                $data['dueInDays'] = $this->dueInDays;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->paymentTermsType !== null) {
                $data['paymentTermsType'] = $this->paymentTermsType;
            }
            if ($this->translatedName !== null) {
                $data['translatedName'] = $this->translatedName;
            }
            return $data;
        }
}
