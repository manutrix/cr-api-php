<?php
/**
 * Member
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
 * Member Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Member implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Member';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tag' => 'string',
        'name' => 'string',
        'arena' => '\Swagger\Client\Model\Arena',
        'role' => 'int',
        'exp_level' => 'int',
        'trophies' => 'int',
        'donations' => 'int',
        'current_rank' => 'int',
        'previous_rank' => 'int',
        'clan_chest_crowns' => 'int',
        'role_name' => 'string',
        'score' => 'int'
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
        'tag' => 'tag',
        'name' => 'name',
        'arena' => 'arena',
        'role' => 'role',
        'exp_level' => 'expLevel',
        'trophies' => 'trophies',
        'donations' => 'donations',
        'current_rank' => 'currentRank',
        'previous_rank' => 'previousRank',
        'clan_chest_crowns' => 'clanChestCrowns',
        'role_name' => 'roleName',
        'score' => 'score'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'tag' => 'setTag',
        'name' => 'setName',
        'arena' => 'setArena',
        'role' => 'setRole',
        'exp_level' => 'setExpLevel',
        'trophies' => 'setTrophies',
        'donations' => 'setDonations',
        'current_rank' => 'setCurrentRank',
        'previous_rank' => 'setPreviousRank',
        'clan_chest_crowns' => 'setClanChestCrowns',
        'role_name' => 'setRoleName',
        'score' => 'setScore'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'tag' => 'getTag',
        'name' => 'getName',
        'arena' => 'getArena',
        'role' => 'getRole',
        'exp_level' => 'getExpLevel',
        'trophies' => 'getTrophies',
        'donations' => 'getDonations',
        'current_rank' => 'getCurrentRank',
        'previous_rank' => 'getPreviousRank',
        'clan_chest_crowns' => 'getClanChestCrowns',
        'role_name' => 'getRoleName',
        'score' => 'getScore'
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
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['arena'] = isset($data['arena']) ? $data['arena'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['exp_level'] = isset($data['exp_level']) ? $data['exp_level'] : null;
        $this->container['trophies'] = isset($data['trophies']) ? $data['trophies'] : null;
        $this->container['donations'] = isset($data['donations']) ? $data['donations'] : null;
        $this->container['current_rank'] = isset($data['current_rank']) ? $data['current_rank'] : null;
        $this->container['previous_rank'] = isset($data['previous_rank']) ? $data['previous_rank'] : null;
        $this->container['clan_chest_crowns'] = isset($data['clan_chest_crowns']) ? $data['clan_chest_crowns'] : null;
        $this->container['role_name'] = isset($data['role_name']) ? $data['role_name'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
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
        return true;
    }


    /**
     * Gets tag
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     * @param string $tag
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets arena
     * @return \Swagger\Client\Model\Arena
     */
    public function getArena()
    {
        return $this->container['arena'];
    }

    /**
     * Sets arena
     * @param \Swagger\Client\Model\Arena $arena
     * @return $this
     */
    public function setArena($arena)
    {
        $this->container['arena'] = $arena;

        return $this;
    }

    /**
     * Gets role
     * @return int
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     * @param int $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets exp_level
     * @return int
     */
    public function getExpLevel()
    {
        return $this->container['exp_level'];
    }

    /**
     * Sets exp_level
     * @param int $exp_level
     * @return $this
     */
    public function setExpLevel($exp_level)
    {
        $this->container['exp_level'] = $exp_level;

        return $this;
    }

    /**
     * Gets trophies
     * @return int
     */
    public function getTrophies()
    {
        return $this->container['trophies'];
    }

    /**
     * Sets trophies
     * @param int $trophies
     * @return $this
     */
    public function setTrophies($trophies)
    {
        $this->container['trophies'] = $trophies;

        return $this;
    }

    /**
     * Gets donations
     * @return int
     */
    public function getDonations()
    {
        return $this->container['donations'];
    }

    /**
     * Sets donations
     * @param int $donations
     * @return $this
     */
    public function setDonations($donations)
    {
        $this->container['donations'] = $donations;

        return $this;
    }

    /**
     * Gets current_rank
     * @return int
     */
    public function getCurrentRank()
    {
        return $this->container['current_rank'];
    }

    /**
     * Sets current_rank
     * @param int $current_rank
     * @return $this
     */
    public function setCurrentRank($current_rank)
    {
        $this->container['current_rank'] = $current_rank;

        return $this;
    }

    /**
     * Gets previous_rank
     * @return int
     */
    public function getPreviousRank()
    {
        return $this->container['previous_rank'];
    }

    /**
     * Sets previous_rank
     * @param int $previous_rank
     * @return $this
     */
    public function setPreviousRank($previous_rank)
    {
        $this->container['previous_rank'] = $previous_rank;

        return $this;
    }

    /**
     * Gets clan_chest_crowns
     * @return int
     */
    public function getClanChestCrowns()
    {
        return $this->container['clan_chest_crowns'];
    }

    /**
     * Sets clan_chest_crowns
     * @param int $clan_chest_crowns
     * @return $this
     */
    public function setClanChestCrowns($clan_chest_crowns)
    {
        $this->container['clan_chest_crowns'] = $clan_chest_crowns;

        return $this;
    }

    /**
     * Gets role_name
     * @return string
     */
    public function getRoleName()
    {
        return $this->container['role_name'];
    }

    /**
     * Sets role_name
     * @param string $role_name
     * @return $this
     */
    public function setRoleName($role_name)
    {
        $this->container['role_name'] = $role_name;

        return $this;
    }

    /**
     * Gets score
     * @return int
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     * @param int $score
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

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
