<?php
namespace Model;

class Ormflorida extends \Orm\Model
{
	protected static $_properties = array('attractionID', 'attractionName', 'description', 'imgPath');
	protected static $_table_name = 'attractions';
	protected static $_primary_key = array('attractionID');
}
