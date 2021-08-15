<?php

namespace vietnixcachePlugin\Model\Api;

use vietnixcachePlugin\Model\Tool\InstantFailMessage;

class ResponseValidator
{
    /**
     * @var array vietnixcachePlugin\Model\Api\AbstractValidator
     */
    public $validators;
    
    /**
     * 
     * @param array vietnixcachePlugin\Model\Api\AbstractValidator
     */
    public function __construct( array $validators )
    {
        $this->validators = $validators;
    }
    
    /**
     * Validate Api response
     * @param object $response
     */
    public function validate( $response, $errors)
    {
        foreach( $this->validators as $validator ){
            $result = $validator->validate( $response );
            
            if( !$result && $errors === false){
                InstantFailMessage::create( $validator->getErrorMessage() );
            }
        }
    }
}