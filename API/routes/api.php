<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\DoctorController;

Route::post('/organizations', [OrganizationController::class, 'addOrganization']);
Route::get('/organizations/{id}', [OrganizationController::class, 'getOrganizationDetails']);
Route::put('/organizations/{id}/change-password', [OrganizationController::class, 'changePassword']);
Route::put('/organizations/{id}', [OrganizationController::class, 'updateOrganization']);
Route::get('/organizations', [OrganizationController::class, 'getAllOrganization']);

Route::post('/branches', [BranchController::class, 'addBranch']);
Route::put('/branches/{id}', [BranchController::class, 'updateBranch']);
Route::delete('/branches/{id}', [BranchController::class, 'deleteBranch']);

Route::post('/medical-records', [MedicalRecordController::class, 'create']);
Route::post('/medical-records/{id}/services', [MedicalRecordController::class, 'addServices']);
Route::post('/medical-records/{id}/services/{serviceId}/details', [MedicalRecordController::class, 'addServiceDetails']);
Route::get('/medical-records', [MedicalRecordController::class, 'viewAllRecords']);
Route::get('/medical-records/{id}', [MedicalRecordController::class, 'viewRecordDetails']);

Route::post('/doctors', [DoctorController::class, 'createDoctor']);
Route::put('/doctors/{cccd}', [DoctorController::class, 'updateDoctor']);
Route::post('/doctors/{cccd}/change-password', [DoctorController::class, 'changePassword']);

Route::post('/login', [AuthController::class, 'login']);
