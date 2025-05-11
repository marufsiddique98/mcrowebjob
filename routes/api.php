<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GigController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\SellerController;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Api\DisputeController;
use App\Http\Controllers\Api\AccountController;
use App\Http\Controllers\Api\GeneralController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TaxonomyController;
use App\Http\Controllers\Api\EducationController;
use App\Http\Controllers\Api\TransactionController;
use App\Http\Controllers\Api\ProfileSettingsController;
use App\Http\Controllers\OptionBuilderSettings\OptionBuilderController;
use App\Http\Controllers\Api\ProposalController;
use App\Http\Controllers\Api\SendMessageController;

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

Route::post('login',        [AuthController::class, 'login']);
Route::post('register',     [AuthController::class, 'register']);
Route::post('forget-password', [AuthController::class, 'resetEmailPassword']);

// Route::get('resend-email',  fn()=> dd('ddd'));


 // Taxonomies
Route::get('taxonomies',    [TaxonomyController::class, 'getTaxonomies']);

Route::get('tags',                  [TaxonomyController::class, 'getTags']);
Route::get('gig_delivery_time',     [TaxonomyController::class, 'getGigDeliveryTime']);
Route::get('project_durations',     [TaxonomyController::class, 'getProjectDuration']);
Route::get('project-location',      [TaxonomyController::class, 'getProjectLocation']);
Route::get('countries',             [TaxonomyController::class, 'getCountries']);
Route::get('country-states/{country_id}', [TaxonomyController::class, 'getAllCountryState']);

  // Search items
Route::get('projects',          [ProjectController::class, 'index']);
Route::get('gigs',              [GigController::class, 'index']);
Route::get('sellers',           [ SellerController::class, 'index']);
Route::get('recent-projects',   [ProjectController::class, 'recentProjects']);

 //
Route::get('project/{id}', [ProjectController::class, 'getProjectDetail']);
Route::get('gig/{id}',       [ GigController::class, 'gigDetail']);
Route::get('seller/{id}',    [ SellerController::class, 'sellerDetail']);

Route::get('popular-gigs',  [GigController::class, 'popularGigs']);
Route::get('top-sellers',   [SellerController::class, 'topSellers']);

 Route::middleware('auth:sanctum')->group(function () {
    Route::get('resend-email',  [AuthController::class, 'resendEmail']);
    Route::post('logout',       [AuthController::class, 'logout']);
});

Route::middleware('auth:sanctum', 'verified')->group(function () {

    Route::middleware(['role:buyer|seller|buyer,api'])->group(function () {


        // Detail pages
        Route::get('user', [ ProfileSettingsController::class, 'useDetail']);
        Route::post('switch-profile',  [ ProfileSettingsController::class, 'switchProfile']);
        Route::post('change-password', [ ProfileSettingsController::class, 'changePassword']);

        Route::post('favourite-item',  [ GeneralController::class, 'setFavItem']);
        Route::get('saved-items',      [ GeneralController::class, 'getSavedItem']);
    });

    Route::middleware(['role:buyer|seller,api'])->group(function () {
        Route::get('portfolios',        [ SellerController::class, 'getPortfolios']);
        Route::put('portfolio/{id}',    [ SellerController::class, 'updatePortfolio']);
        Route::post('portfolio',        [ SellerController::class, 'addPortfolio']);
        Route::delete('portfolio/{id}', [ SellerController::class, 'deletePortfolio']);
    });

    Route::post('reset-password',       [AuthController::class, 'resetPassword']);
    Route::get('account-stats',         [AccountController::class, 'getAccountStats']);
    Route::get('payout-history',        [AccountController::class, 'getPayoutHistory']);
    Route::post('setup-payout-method',  [AccountController::class, 'setPayoutMethod']);
    Route::get('payout-method',         [AccountController::class, 'getPayoutMethod']);
    Route::post('withdraw-amount',      [AccountController::class, 'withdrawAmount']);
    Route::get('settings',              [OptionBuilderController::class, 'getOpSettings']);

    Route::get('educations',                [EducationController::class, 'getEducations']);
    Route::post('education',                [EducationController::class, 'addEducation']);
    Route::post('update-education/{id}',    [EducationController::class, 'updateEducation']);
    Route::delete('delete-education/{id}',  [EducationController::class, 'deleteEducation']);

    // Account settings
    Route::post('update-privacy-info',  [ ProfileSettingsController::class, 'updatePrivacyInfo']);
    Route::post('deactivate-account',   [ ProfileSettingsController::class, 'deactivateAccount']);

    Route::post('update-profile-info',  [ ProfileSettingsController::class, 'updateProfileInfo']);
    Route::post('update-profile-photo', [ ProfileSettingsController::class, 'updateProfilePhoto']);

    Route::put('identity-information',  [ ProfileSettingsController::class, 'uploadIdentityInfo']);
    Route::get('identity-information',  [ ProfileSettingsController::class, 'getIdentityInfo']);

    Route::get('billing-information',   [ ProfileSettingsController::class, 'getBillingInfo']);
    Route::post('billing-information',  [ ProfileSettingsController::class, 'updateBillingInfo']);

    Route::get('disputes', [ DisputeController::class, 'getDisputes']);
    Route::get('invoices', [ TransactionController::class, 'getInvoices']);

    Route::get('fee-tax',        [ProposalController::class, 'getFeeTax'] );
    Route::post('send-message',  [SendMessageController::class, 'sendMessage'] );
    Route::middleware(['role:seller,api'])->group(function () {
        Route::post('submit-proposal/{id}',  [ProposalController::class, 'submitProposal']);
    });
});
Route::fallback(function () {
    return response()->message(message: __('messages.api_url_not_found'), status_code: Response::HTTP_NOT_FOUND);
});

