'use strict';

/* Controllers */

var dynamicTitlePageApp = angular.module('dynamicTitlePageApp',[]);

dynamicTitlePageApp.controller('MessageListCtrl',function($scope)
{
    $scope.messages = 
    [
        {
            'messageBody' : 'Message #1',
            'senderIP' : '10.1.1.17',
            'timeSent' : '12/5/2015'
        },
        {
            'messageBody' : 'Message #2',
            'senderIP' : '10.1.1.17',
            'timeSent' : '12/6/2015'
        }        
    ];
});