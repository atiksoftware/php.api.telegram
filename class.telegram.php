<?php



		class Telegram
		{

			function request($endpoint,$param){
				$url  = 'https://api.telegram.org/'.$this->token.'/'.$endpoint."?".http_build_query($param);
				return file_get_contents($url);
			}

			function chat($id,$mgs){
				$this->request(
					'sendMessage',
					[
						'chat_id' => $id,
						'text'    => $mgs
					]
				);
			}

		}


		$t = new \Telegram();

		$t->token = "bot361945952:XXXXXXXXXXXXXXXXXXXXfZAp-F2c";

		$t->chat(
			"@targetchannelid",
			"Hi, How re ou"
		);
