<?php

defined('BASEPATH') or exit('No direct script access allowed');

include_once(__DIR__ . '/traits/PerfexSaasMailTemplate.php');

/**
 * Email template class for email sent to customer on custom domain approval
 */
class Customer_custom_domain_approved extends App_mail_template
{
    use PerfexSaasMailTemplate;

    /**
     * @inheritDoc
     */
    public $rel_type = 'contact';

    /**
     * @inheritDoc
     */
    protected $for = 'customer';

    /**
     * @inheritDoc
     */
    public $slug = 'company-instance-custom-domain-approved';
}
