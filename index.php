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
        ?>
    </body>
</html>
