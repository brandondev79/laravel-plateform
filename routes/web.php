<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['verify' => true]);

Route::get('logout', function () {
    Auth::logout();
    return redirect('/');
});

Route::group(['namespace' => 'Front'], function () {
    Route::get('/', 'HomeController@index')->name('front.home');
    Route::get('/pricing', 'PricingController@index')->name('front.pricing');
    Route::get('/sme', 'SMEController@index')->name('front.sme');
    Route::get('/contact', 'ContactController@index')->name('front.contact');
});

Route::group(['prefix' => 'employee', 'middleware' => ['role:employee'], 'namespace' => 'Employee'], function () {
    Route::get('/', 'HomeController@index')->name('employee.home');
    Route::get('skills', 'SkillsController@index')->name('employee.skill');

    Route::post('missions', 'MissionsController@store')->name('employee.mission.create');
    Route::get('missions', 'MissionsController@index')->name('employee.mission');
    Route::get('missions/{id}/delete', 'MissionsController@delete')->name('employee.mission.delete');
    Route::get('missions/{miss}/edit', 'MissionsController@edit')->name('employee.mission.edit');
    Route::put('missions/{mission}/edit', 'MissionsController@update')->name('employee.mission.update');

    Route::post('formations', 'FormationsController@store')->name('employee.formation.create');
    Route::get('formations', 'FormationsController@index')->name('employee.formation');
    Route::get('formations/{id}/delete', 'FormationsController@delete')->name('employee.formation.delete');
    Route::get('formations/{form}/edit', 'FormationsController@edit')->name('employee.formation.edit');
    Route::put('formations/{formation}/edit', 'FormationsController@update')->name('employee.formation.update');

    Route::patch('/users/{user}/update', 'UsersController@update')->name('employee.user.update');
    Route::post('/skills/add', 'SkillsController@add')->name('employee.skill.add');
    Route::patch('/skills/update', 'SkillsController@update')->name('employee.skill.update');

    Route::post('skillsClear', 'SkillsController@clear')->name('employee.skill.clear');
    Route::get('skillsSearch', 'SkillsController@search')->name('employee.skill.search');
    Route::get('attachSkill/{id}', 'SkillsController@attachSkill')->name('employee.skill.attach');
    Route::get('detachSkill/{id}', 'SkillsController@detachSkill')->name('employee.skill.detach');

    Route::get('crop/{x}/{y}/{w}/{h}', 'UsersController@crop')->name('employee.user.crop');
});

Route::get('pdf-download/{id?}', 'PdfController@index')->name('pdfDownload');

Route::group(['prefix' => 'admin', 'middleware' => ['role:admin'], 'namespace' => 'Admin'], function () {
    Route::get('/', 'HomeController@index')->name('admin.home');
    Route::post('addUser', 'HomeController@addUser')->name('admin.add.user');
    Route::get('deleteUser/{user}', 'HomeController@deleteUser')->name('admin.delete.user');
    Route::get('showUserResume/{id}', 'HomeController@showUserResume')->name('showUserResume');
    Route::get('templates', 'TemplateController@index')->name('admin.templates');
    Route::get('changeTemplate/{id}', 'HomeController@changeTemplate')->name('admin.change.template');
    Route::get('skills', 'HomeController@skills')->name('admin.skills');
    Route::post('skills/add', 'HomeController@skillAdd')->name('admin.skill.add');
    Route::get('skills/deleteSkillsCat/{cat}', 'HomeController@deleteSkillsCat')->name('admin.delete.skills.cat');
    Route::get('skills/deleteSkill/{skill}', 'HomeController@deleteSkill')->name('admin.delete.skill');
    Route::get('skills/editSkillsCat/{cat}', 'HomeController@editSkillsCat')->name('admin.edit.skills.cat');
    Route::get('skills/editSkill/{skill}', 'HomeController@editSkill')->name('admin.edit.skill');
    Route::post('updateSkillsCat/{cat}', 'HomeController@updateSkillsCat')->name('admin.update.skills.cat');
    Route::post('updateSkill/{skill}', 'HomeController@updateSkill')->name('admin.update.skill');
});

Route::group(['prefix' => 'company', 'middleware' => ['role:company'], 'namespace' => 'Company'], function () {
    Route::get('/', 'HomeController@index')->name('company.home');
    Route::post('addUser', 'HomeController@addUser')->name('company.add.user');
    Route::get('deleteUser/{user}', 'HomeController@deleteUser')->name('company.delete.user');
    Route::get('showUserResume/{id}', 'HomeController@showUserResume')->name('showUserResume');
    Route::get('templates', 'TemplateController@index')->name('company.templates');
    Route::get('changeTemplate/{id}', 'HomeController@changeTemplate')->name('company.change.template');
    Route::get('skills', 'HomeController@skills')->name('company.skills');
    Route::post('skills/add', 'HomeController@skillAdd')->name('company.skill.add');
    Route::get('skills/deleteSkillsCat/{cat}', 'HomeController@deleteSkillsCat')->name('company.delete.skills.cat');
    Route::get('skills/deleteSkill/{skill}', 'HomeController@deleteSkill')->name('company.delete.skill');
    Route::get('skills/editSkillsCat/{cat}', 'HomeController@editSkillsCat')->name('company.edit.skills.cat');
    Route::get('skills/editSkill/{skill}', 'HomeController@editSkill')->name('company.edit.skill');
    Route::post('updateSkillsCat/{cat}', 'HomeController@updateSkillsCat')->name('company.update.skills.cat');
    Route::post('updateSkill/{skill}', 'HomeController@updateSkill')->name('company.update.skill');
    Route::get('settings', 'SettingController@index')->name('company.settings');
});

Route::group(['prefix' => 'sale', 'middleware' => ['role:sale'], 'namespace' => 'Sale'], function () {
    Route::get('/', 'HomeController@index')->name('sale.home');
    Route::get('showUserResume/{id}', 'HomeController@showUserResume')->name('showUserResume2');
});


Route::get('/home', function () {
    $to = Auth::check() ? Auth::user()->role() : 'login';
    return redirect($to);
});