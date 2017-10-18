<?php
/**
 * Stats
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Clash Royale API
 *
 * This API description is based on the api provided by http://cr-api.com
 *
 * OpenAPI spec version: 1.0.0
 * Contact: cr-api@manutrix.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Stats Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Stats implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Stats';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'legendary_trophies' => 'int',
        'tournament_cards_won' => 'int',
        'max_trophies' => 'int',
        'three_crown_wins' => 'int',
        'cards_found' => 'int',
        'total_donations' => 'int',
        'challenge_max_wins' => 'int',
        'challenge_cards_won' => 'int',
        'level' => 'int',
        'favorite_card' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'legendary_trophies' => 'legendaryTrophies',
        'tournament_cards_won' => 'tournamentCardsWon',
        'max_trophies' => 'maxTrophies',
        'three_crown_wins' => 'threeCrownWins',
        'cards_found' => 'cardsFound',
        'total_donations' => 'totalDonations',
        'challenge_max_wins' => 'challengeMaxWins',
        'challenge_cards_won' => 'challengeCardsWon',
        'level' => 'level',
        'favorite_card' => 'favoriteCard'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'legendary_trophies' => 'setLegendaryTrophies',
        'tournament_cards_won' => 'setTournamentCardsWon',
        'max_trophies' => 'setMaxTrophies',
        'three_crown_wins' => 'setThreeCrownWins',
        'cards_found' => 'setCardsFound',
        'total_donations' => 'setTotalDonations',
        'challenge_max_wins' => 'setChallengeMaxWins',
        'challenge_cards_won' => 'setChallengeCardsWon',
        'level' => 'setLevel',
        'favorite_card' => 'setFavoriteCard'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'legendary_trophies' => 'getLegendaryTrophies',
        'tournament_cards_won' => 'getTournamentCardsWon',
        'max_trophies' => 'getMaxTrophies',
        'three_crown_wins' => 'getThreeCrownWins',
        'cards_found' => 'getCardsFound',
        'total_donations' => 'getTotalDonations',
        'challenge_max_wins' => 'getChallengeMaxWins',
        'challenge_cards_won' => 'getChallengeCardsWon',
        'level' => 'getLevel',
        'favorite_card' => 'getFavoriteCard'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const FAVORITE_CARD_BOWLER = 'bowler';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFavoriteCardAllowableValues()
    {
        return [
            self::FAVORITE_CARD_BOWLER,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['legendary_trophies'] = isset($data['legendary_trophies']) ? $data['legendary_trophies'] : null;
        $this->container['tournament_cards_won'] = isset($data['tournament_cards_won']) ? $data['tournament_cards_won'] : null;
        $this->container['max_trophies'] = isset($data['max_trophies']) ? $data['max_trophies'] : null;
        $this->container['three_crown_wins'] = isset($data['three_crown_wins']) ? $data['three_crown_wins'] : null;
        $this->container['cards_found'] = isset($data['cards_found']) ? $data['cards_found'] : null;
        $this->container['total_donations'] = isset($data['total_donations']) ? $data['total_donations'] : null;
        $this->container['challenge_max_wins'] = isset($data['challenge_max_wins']) ? $data['challenge_max_wins'] : null;
        $this->container['challenge_cards_won'] = isset($data['challenge_cards_won']) ? $data['challenge_cards_won'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['favorite_card'] = isset($data['favorite_card']) ? $data['favorite_card'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        $allowed_values = ["bowler"];
        if (!in_array($this->container['favorite_card'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'favorite_card', must be one of 'bowler'.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        $allowed_values = ["bowler"];
        if (!in_array($this->container['favorite_card'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets legendary_trophies
     * @return int
     */
    public function getLegendaryTrophies()
    {
        return $this->container['legendary_trophies'];
    }

    /**
     * Sets legendary_trophies
     * @param int $legendary_trophies
     * @return $this
     */
    public function setLegendaryTrophies($legendary_trophies)
    {
        $this->container['legendary_trophies'] = $legendary_trophies;

        return $this;
    }

    /**
     * Gets tournament_cards_won
     * @return int
     */
    public function getTournamentCardsWon()
    {
        return $this->container['tournament_cards_won'];
    }

    /**
     * Sets tournament_cards_won
     * @param int $tournament_cards_won
     * @return $this
     */
    public function setTournamentCardsWon($tournament_cards_won)
    {
        $this->container['tournament_cards_won'] = $tournament_cards_won;

        return $this;
    }

    /**
     * Gets max_trophies
     * @return int
     */
    public function getMaxTrophies()
    {
        return $this->container['max_trophies'];
    }

    /**
     * Sets max_trophies
     * @param int $max_trophies
     * @return $this
     */
    public function setMaxTrophies($max_trophies)
    {
        $this->container['max_trophies'] = $max_trophies;

        return $this;
    }

    /**
     * Gets three_crown_wins
     * @return int
     */
    public function getThreeCrownWins()
    {
        return $this->container['three_crown_wins'];
    }

    /**
     * Sets three_crown_wins
     * @param int $three_crown_wins
     * @return $this
     */
    public function setThreeCrownWins($three_crown_wins)
    {
        $this->container['three_crown_wins'] = $three_crown_wins;

        return $this;
    }

    /**
     * Gets cards_found
     * @return int
     */
    public function getCardsFound()
    {
        return $this->container['cards_found'];
    }

    /**
     * Sets cards_found
     * @param int $cards_found
     * @return $this
     */
    public function setCardsFound($cards_found)
    {
        $this->container['cards_found'] = $cards_found;

        return $this;
    }

    /**
     * Gets total_donations
     * @return int
     */
    public function getTotalDonations()
    {
        return $this->container['total_donations'];
    }

    /**
     * Sets total_donations
     * @param int $total_donations
     * @return $this
     */
    public function setTotalDonations($total_donations)
    {
        $this->container['total_donations'] = $total_donations;

        return $this;
    }

    /**
     * Gets challenge_max_wins
     * @return int
     */
    public function getChallengeMaxWins()
    {
        return $this->container['challenge_max_wins'];
    }

    /**
     * Sets challenge_max_wins
     * @param int $challenge_max_wins
     * @return $this
     */
    public function setChallengeMaxWins($challenge_max_wins)
    {
        $this->container['challenge_max_wins'] = $challenge_max_wins;

        return $this;
    }

    /**
     * Gets challenge_cards_won
     * @return int
     */
    public function getChallengeCardsWon()
    {
        return $this->container['challenge_cards_won'];
    }

    /**
     * Sets challenge_cards_won
     * @param int $challenge_cards_won
     * @return $this
     */
    public function setChallengeCardsWon($challenge_cards_won)
    {
        $this->container['challenge_cards_won'] = $challenge_cards_won;

        return $this;
    }

    /**
     * Gets level
     * @return int
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     * @param int $level
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets favorite_card
     * @return string
     */
    public function getFavoriteCard()
    {
        return $this->container['favorite_card'];
    }

    /**
     * Sets favorite_card
     * @param string $favorite_card
     * @return $this
     */
    public function setFavoriteCard($favorite_card)
    {
        $allowed_values = array('bowler');
        if (!is_null($favorite_card) && (!in_array($favorite_card, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'favorite_card', must be one of 'bowler'");
        }
        $this->container['favorite_card'] = $favorite_card;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}
