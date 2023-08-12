<?php
/**
 * @copyright Copyright © 2023 BeastBytes - All rights reserved
 * @license BSD 3-Clause
 */

declare(strict_types=1);

namespace BeastBytes\Country;

interface CountryDataInterface
{
    /**
     * @return array ISO 3116 alpha-2 codes of supported countries
     */
    public function getCountries(): array;

    /**
     * @return bool Whether the country is in the list of supported countries
     */
    public function hasCountry(string $country): bool;
    public function formatAddress(array $address, string $country): string;
    public function formatName(array $name, string $country): string;
    public function getAddressFormat(string $country): string;
    public function getAlpha3(string $country): string;
    public function getCountry(string $country): array;
    public function getIdc(string $country): string;
    public function getFlag(string $country): string;
    public function getName(string $country): string;
    public function getNameFormat(string $country): string;
    public function getNumericCode(string $country): string;
    public function getTld(string $country): string;
    public function getTimezone(string $country): string;
}
