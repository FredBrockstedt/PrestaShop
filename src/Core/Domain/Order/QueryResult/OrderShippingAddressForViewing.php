<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

class OrderShippingAddressForViewing
{
    /**
     * @var int
     */
    private $addressId;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $companyName;

    /**
     * @var string|null
     */
    private $vatNumber;

    /**
     * @var string
     */
    private $address1;

    /**
     * @var string
     */
    private $address2;

    /**
     * @var string
     */
    private $cityName;

    /**
     * @var string
     */
    private $stateName;

    /**
     * @var string
     */
    private $countryName;

    /**
     * @var string
     */
    private $postCode;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $mobilePhoneNumber;

    /**
     * @param int $addressId
     * @param string $firstName
     * @param string $lastName
     * @param string $companyName
     * @param string $address1
     * @param string $address2
     * @param string $stateName
     * @param string $cityName
     * @param string $countryName
     * @param string $postCode
     * @param string $phone
     * @param string $phoneMobile
     * @param string|null $vatNumber
     */
    public function __construct(
        int $addressId,
        ?string $firstName,
        ?string $lastName,
        ?string $companyName,
        ?string $address1,
        ?string $address2,
        ?string $stateName,
        ?string $cityName,
        ?string $countryName,
        ?string $postCode,
        ?string $phone,
        ?string $phoneMobile,
        ?string $vatNumber = null
    ) {
        $this->addressId = $addressId;
        $this->firstName = strval($firstName);
        $this->lastName = strval($lastName);
        $this->companyName = strval($companyName);
        $this->vatNumber = strval($vatNumber);
        $this->address1 = strval($address1);
        $this->address2 = strval($address2);
        $this->stateName = strval($stateName);
        $this->cityName = strval($cityName);
        $this->countryName = strval($countryName);
        $this->postCode = strval($postCode);
        $this->phoneNumber = strval($phone);
        $this->mobilePhoneNumber = strval($phoneMobile);
    }

    /**
     * @return int
     */
    public function getAddressId(): int
    {
        return $this->addressId;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return sprintf('%s %s', $this->firstName, $this->lastName);
    }

    /**
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    /**
     * @return string|null
     */
    public function getVatNumber(): ?string
    {
        return $this->vatNumber;
    }

    /**
     * @return string
     */
    public function getAddress1(): string
    {
        return $this->address1;
    }

    /**
     * @return string
     */
    public function getAddress2(): string
    {
        return $this->address2;
    }

    /**
     * @return string
     */
    public function getCityName(): string
    {
        return $this->cityName;
    }

    /**
     * @return string
     */
    public function getStateName(): string
    {
        return $this->stateName;
    }

    /**
     * @return string
     */
    public function getCountryName(): string
    {
        return $this->countryName;
    }

    /**
     * @return string
     */
    public function getPostCode(): string
    {
        return $this->postCode;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * @return string
     */
    public function getMobilePhoneNumber(): string
    {
        return $this->mobilePhoneNumber;
    }
}
