<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		//logic for implementing FizzBuzz
		
		
		$viewData = array();					//used to store data to pass to view

		for($x = 1; $x < 101; $x++)
		{
			if($x % 3 == 0 && $x % 5 == 0)
			{
				$viewData[$x - 1] = $x.": FizzBuzz";
			}
			else
			{
				if($x % 3 == 0)
				{
					$viewData[$x - 1] = $x.": Fizz";
				}
				else
				{
					if($x % 5 == 0)
					{
						$viewData[$x - 1] = $x.": Buzz";
					}
					else
					{
						$viewData[$x - 1] = $x.": ".$x;
					}
				}
			}
		}
		
		$this->response->body(View::factory('welcome')->set('dataArray', $viewData));
	}

} // End Welcome
