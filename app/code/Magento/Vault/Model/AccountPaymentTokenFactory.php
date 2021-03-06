<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Vault\Model;

/**
 * Class AccountPaymentTokenFactory
 * @api
 */
class AccountPaymentTokenFactory extends AbstractPaymentTokenFactory
{
    /**
     * @var string
     */
    const TOKEN_TYPE_ACCOUNT = 'account';

    /**
     * @inheritdoc
     */
    public function getType()
    {
        return self::TOKEN_TYPE_ACCOUNT;
    }
}
