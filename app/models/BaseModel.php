<?php

use Carbon\Carbon;

class BaseModel extends Eloquent 

{

	public function getUpdatedAtAttribute($value)
	{
		return $this->convertToLocalTimezone($value);
	}

	public function getCreatedAtAttribute($value)
	{
		return $this->convertToLocalTimezone($value);
    }
    public function convertToLocalTimezone($value)
	{
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
    	return $utc->setTimezone('America/Chicago');
	}

}

?>