<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html ng-app="dynamicTitlePageApp">
    <head>
        <title>TODO supply a title</title>
        <script type="text/javascript" src="js/angular-1.5.0b2.min.js"></script>
        <script type="text/javascript" src="js/controllers.js"></script>
    </head>
    <body ng-controller="MessageListCtrl">
        <li ng-repeat="message in messages">
            <span> {{message.messageBody}} </span>
        </li>
        
        <?php
            echo "hello world!";
            
            //conection on port 1527
            
            //--table columns--
            //index
            //messageBody
            //senderIP
            //timeSent
            
            //MsgDataDB.MsgData
            
            $username='netbeans';
            $password='netbeans123';
            $dbname='Driver=odbc:derby://localhost:1527/MsgDataDB';
            
            $dbconn= odbc_connect($dbname, $password, $username);
            odbc_autocommit($dbconn, TRUE);
            echo $dbconn;
            
            $sqlInsert = "INSERT INTO MSGDATA VALUES "
                    . "('Message #2', '127.0.0.1', '12:22:33', 2);";


            $result = odbc_exec($dbconn, $sqlInsert);
            print $result;
        ?>
    </body>
</html>
