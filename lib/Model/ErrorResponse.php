<?php
/**
 * ErrorResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  SMSGatewayMe\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SMSGatewayMe\Client\Model;

use \ArrayAccess;
/**
 * ErrorResponse Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     SMSGatewayMe\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ErrorResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'message' => 'string',
        'data' => '\SMSGatewayMe\Client\Model\Error[]'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'message' => 'message',
        'data' => 'data'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'message' => 'setMessage',
        'data' => 'setData'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'message' => 'getMessage',
        'data' => 'getData'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $message 
      * @var string
      */
    protected $message;
    
    /**
      * $data 
      * @var \SMSGatewayMe\Client\Model\Error[]
      */
    protected $data;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->message = $data["message"];
            $this->data = $data["data"];
        }
    }
    
    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
  
    /**
     * Sets message
     * @param string $message 
     * @return $this
     */
    public function setMessage($message)
    {
        
        $this->message = $message;
        return $this;
    }
    
    /**
     * Gets data
     * @return \SMSGatewayMe\Client\Model\Error[]
     */
    public function getData()
    {
        return $this->data;
    }
  
    /**
     * Sets data
     * @param \SMSGatewayMe\Client\Model\Error[] $data 
     * @return $this
     */
    public function setData($data)
    {
        
        $this->data = $data;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SMSGatewayMe\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SMSGatewayMe\Client\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}