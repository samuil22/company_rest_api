<?php
 
$router->get('/ChartData',['middleware'=>'auth','uses'=> 'ChartDataController@onAllSelect']);
$router->get('/ClientReview', ['middleware'=>'auth','uses'=>'ClientReviewController@onAllSelect']);
$router->post('/ContactSend', ['middleware'=>'auth','uses'=>'ContactController@onContactSend']);

$router->get('/CourseHome', ['middleware'=>'auth','uses'=>'CourseController@onSelectFour']);
$router->get('/CourseAll', ['middleware'=>'auth','uses'=>'CourseController@onSelectAll']);
$router->get('/CourseDetails/{courseID}', ['middleware'=>'auth','uses'=>'CourseController@onSelectDetails']);

$router->get('/newData',['middleware'=>'auth','uses'=>'newDataController@onSelect']);

$router->get('/Footer', ['middleware'=>'auth','uses'=>'FooterController@onSelect']);
$router->get('/Information',['middleware'=>'auth','uses'=> 'InformationController@onSelect']);
$router->get('/Serveices', ['middleware'=>'auth','uses'=>'ServiceController@onSelect']);
$router->get('/Serveices3', ['middleware'=>'auth','uses'=>'ServiceController@onService3']);


$router->get('/Project3', ['middleware'=>'auth','uses'=>'ProjectController@onSelect3']);
$router->get('/ProjectAll', ['middleware'=>'auth','uses'=>'ProjectController@onSelectAll']);
$router->get('/ProjectDetails/{projectID}', ['middleware'=>'auth','uses'=>'ProjectController@onSelectDetails']);


$router->get('/VideoHome', ['middleware'=>'auth','uses'=>'HomeEtcController@onSelectVideo']);
$router->get('/TotalClient', ['middleware'=>'auth','uses'=>'HomeEtcController@onSelectProject']);
$router->get('/TechDesc', ['middleware'=>'auth','uses'=>'HomeEtcController@onSelectTecDesc']);   

$router->get('/HomeTop', ['middleware'=>'auth','uses'=>'HomeEtcController@onSelectTopTitle']);   