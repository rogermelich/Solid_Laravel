<?php
Route::group(['middleware' => 'web'], function () {

    Route::get('textSendEmail', 'ContactEmailController@send');

});


