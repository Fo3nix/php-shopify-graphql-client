<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyJob;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrderCreateMandatePaymentJobResult;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPaymentScheduleCaptureUserError;

/**
 * Return type for `paymentScheduleCapture` mutation.
 */
class ShopifyPaymentScheduleCapturePayload
{
    protected $job;
    protected $jobResult;
    protected $paymentReferenceId;
    protected $userErrors;

    
    /**
     * The async job used for charging the payment.
     *
     * @return ShopifyJob
     */
    public function getJob(): ?ShopifyJob
    {
        return $this->job;
    }

    
    /**
     * The job result for tracking the status of the payment capture.
     *
     * @return ShopifyOrderCreateMandatePaymentJobResult
     */
    public function getJobResult(): ?ShopifyOrderCreateMandatePaymentJobResult
    {
        return $this->jobResult;
    }

    
    /**
     * The unique ID for the created payment.
     *
     * @return string
     */
    public function getPaymentReferenceId(): ?string
    {
        return $this->paymentReferenceId;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyPaymentScheduleCaptureUserError[]
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
            if (isset($data['job']) && $data['job'] !== null) {
                $instance->job = ShopifyJob::fromArray($data['job']);
            }
            if (isset($data['jobResult']) && $data['jobResult'] !== null) {
                $instance->jobResult = ShopifyOrderCreateMandatePaymentJobResult::fromArray($data['jobResult']);
            }
            if (isset($data['paymentReferenceId']) && $data['paymentReferenceId'] !== null) {
                $instance->paymentReferenceId = $data['paymentReferenceId'];
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyPaymentScheduleCaptureUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->job !== null) {
                $data['job'] = $this->job->asArray();
            }
            if ($this->jobResult !== null) {
                $data['jobResult'] = $this->jobResult->asArray();
            }
            if ($this->paymentReferenceId !== null) {
                $data['paymentReferenceId'] = $this->paymentReferenceId;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
