<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMarketingActivityUserError;

/**
 * Return type for `marketingEngagementsDelete` mutation.
 */
class ShopifyMarketingEngagementsDeletePayload
{
    protected $result;
    protected $userErrors;

    
    /**
     * Informational message about the engagement data that has been marked for deletion.
     *
     * @return string
     */
    public function getResult(): ?string
    {
        return $this->result;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyMarketingActivityUserError[]
     */
    public function getUserErrors(): ?array
    {
        return $this->userErrors;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['result']) && $data['result'] !== null) {
                $instance->result = $data['result'];
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyMarketingActivityUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->result !== null) {
                $data['result'] = $this->result;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
