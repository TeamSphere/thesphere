<?php 

/**
 * users model
 */
class Category extends Model
{
	
	public $errors = [];
	protected $table = "categories";

	protected $allowedColumns = [

		'category',
		'disabled',
		 
	];

	public function validate($data)
	{
		$this->errors = [];

		if(empty($data['category']))
		{
			$this->errors['category'] = "A category is required";
		} else {
			if(!preg_match("/^[a-zA-Z \&\']+$/",$data['firstname']))
				{
					$this->errors['category'] = "Category can only have letters and spaces";
				}
		}
		
		if(empty($this->errors))
		{
			return true;
		}

		return false;
	}

}