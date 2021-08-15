<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::resource('address','App\Http\Controllers\AddressController');

Route::resource('patient','App\Http\Controllers\PatientController');

Route::resource('patientethnicity','App\Http\Controllers\PatientEthnicityController');

Route::resource('patientcontact','App\Http\Controllers\PatientContactController');

Route::resource('lkupcontacttype','App\Http\Controllers\LkupContactTypeController');

Route::resource('patientdiagnosistreatment','App\Http\Controllers\PatientDiagnosisTreatmentController');

Route::resource('patientdiagnosisadditional','App\Http\Controllers\PatientDiagnosisAdditionalController');

Route::resource('patientdiagnosisremotesite','App\Http\Controllers\PatientDiagnosisRemoteSiteController');

Route::resource('patientcontactdata','App\Http\Controllers\PatientContactDataController');

Route::resource('lkupcontactdatatype','App\Http\Controllers\LkupContactDataTypeController');

Route::resource('patientfull','App\Http\Controllers\PatientFullController');

Route::resource('sureveystepone','App\Http\Controllers\SurveyStepOneController');
Route::resource('sureveysteptwo','App\Http\Controllers\SurveyStepTwoController');
Route::resource('sureveystepthree','App\Http\Controllers\SurveyStepThreeController');

Route::resource('patientdiagnosis','App\Http\Controllers\PatientDiagnosisController');

Route::resource('patientdiagnosiscancerstage','App\Http\Controllers\PatientDiagnosisCancerStageController');
Route::resource('patientdiagnosiscancertype','App\Http\Controllers\PatientDiagnosisCancerTypeController');
Route::resource('patientdiagnosiscelltype','App\Http\Controllers\PatientDiagnosisCellTypeController');
Route::resource('patientdiagnosisperformancescore','App\Http\Controllers\PatientDiagnosisPerformanceScoreController');
Route::resource('patientdiagnosistumorsite','App\Http\Controllers\PatientDiagnosisTumorSiteController');
Route::resource('patientdiagnosistumorsize','App\Http\Controllers\PatientDiagnosisTumorSizeController');



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
