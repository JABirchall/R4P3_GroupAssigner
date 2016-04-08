<?php
	//Teamspeak query connection settings
	$config['ip'] = '127.0.0.1'; //Server IP (use 127.0.0.1 if your teamspeak server is located on the same machine)
    $config['queryport'] = '10011'; //Query port (Default = 10011)
    $config['serverport'] = '9987'; //Instance port, (Default = 9987)
    $config['loginname'] = 'serveradmin'; //Query loginname
    $config['password'] = 'Tyc00n'; //Query password        
    $config['displayname'] = "MxG Bot"; //Bot nickanme

    //General settings
    $config['send_enable'] = true; //send a message to client (can be true or false)
    $config['send_method'] = 'text'; //method of message (text/poke)
    $config['send_message_success'] = '[COLOR=green]You just became a member of the group '; //The client receives that message as soon as he received his group
    $config['send_message_invalid_username'] = "[COLOR=red]You must change your name to your registered username on the forums! ";
    $config['groups'] = array(26); //comma seperated list of groupids
?>