<?php

namespace SRC\Models;

class Mail {

    public function sendEmail($lastName, $firstName, $email, $society, $message)
    {
        $header="MIME-Version: 1.0\r\n";
		$header.='From:"Contact - GCPlastic.com"<contact@gcplastic.com>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="left">
					<br />
					<u>Nom de l\'expéditeur</u> :'.$lastName.' ' .$firstName. '<br />
                    <u>Mail de l\'expéditeur</u> :'.$email.'<br />
                    <u>Société de l\'expediteur</u> : '.$society.'<br />
					<br />
					'.nl2br($message).'
					<br />
				</div>
			</body>
		</html>
		';

		mail("perello.valentinpro@gmail.com", "Contact - GCPlastic.com", $message, $header);
    }
}