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
     * @return array List (e.g. ISO 3116 alpha-2 codes) of supported countries
     */
    public function getCountries(): array;
    /**
     * @return bool Whether the country is in the list of supported countries
     */
    public function hasCountry(string $country): bool;
    /**
     * @return string Address format for the country
     */
    public function getAddressFormat(string $country): string;
    /**
     * @return string ISO 3116 alpha-3 code for the country
     */
    public function getAlpha3(string $country): string;
    /**
     * @return array All data for the country
     */
    public function getCountry(string $country): array;
    /**
     * @return string International dialling code for the country
     */
    public function getIdc(string $country): string;
    /**
     * @return string Flag for the country
     */
    public function getFlag(string $country): string;
    /**
     * @return string Name of the country
     */
    public function getName(string $country): string;
    /**
     * @return string Name format for the country
     */
    public function getNameFormat(string $country): string;
    /**
     * @return string ISO 3116 numeric code for the country
     */
    public function getNumericCode(string $country): string;
    /**
     * @return string Top level domain for the country
     */
    public function getTld(string $country): string;
    /**
     * @return string Timezone(s) for the country
     */
    public function getTimezone(string $country): string;
}
