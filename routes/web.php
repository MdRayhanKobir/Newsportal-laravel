<?php

use App\Http\Controllers\AddvertisementController;
use Doctrine\Inflector\Rules\Word;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\SocialController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\WebsiteController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DistrictController;
use App\Http\Controllers\Backend\RollController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\SubDistrictController;
use App\Http\Controllers\Backend\VideosController;
use App\Http\Controllers\Backend\WebsiteSettingController;
use App\Http\Controllers\Frontend\HomeController;

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

// Route::get('/', function () {
//     return view('main.index');
// });

// Fronend Home Route
Route::get('/',[HomeController::class,'Home'])->name('home');

// Frontend multilanguage Route
Route::get('/lang.english',[HomeController::class,'English'])->name('lang.english');
Route::get('/lang.bangla',[HomeController::class,'Bangla'])->name('lang.bangla');

// Singlepost Route
Route::get('/view/singlepost/{id}',[HomeController::class,'Singlepost'])->name('singlepost');

// All post Route
Route::get('/catpost/{id}/{category_eng}',[HomeController::class,'Allpost']);
Route::get('/subcatpost/{id}/{subcategory_eng}',[HomeController::class,'Suballpost']);

// Search District Route
Route::get('/get/subdistrict/search/{distric_id}',[HomeController::class,'SearchGetdistrict']);
Route::get('/search/district',[HomeController::class,'SearchDistrict'])->name('search.district');

// Aboutus.terms & condition all Route
Route::get('/aboutus',[HomeController::class,'AboutUs'])->name('about.us');
Route::get('/terms/condition',[HomeController::class,'TermsCondition'])->name('terms.condition');
Route::get('/contactus',[HomeController::class,'ContactUs'])->name('contact.us');











Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

// Admin Logout
Route::get('/admin/logout',[AdminController::class,'Logout'])->name('admin.logout');

// Admin Category Route
Route::get('/category',[CategoryController::class,'Index'])->name('categories');
Route::get('/add/category',[CategoryController::class,'AddCategory'])->name('add.categories');
Route::post('/store/category',[CategoryController::class,'StoreCategory'])->name('store.categories');
Route::get('/edit/category/{id}',[CategoryController::class,'EditCategory'])->name('edit.categories');
Route::post('/update/category/{id}',[CategoryController::class,'UpdateCategory'])->name('update.categories');
Route::get('/delete/category/{id}',[CategoryController::class,'DeleteCategory'])->name('delete.categories');

// Admin SubCategory Route
Route::get('/subcategory',[SubCategoryController::class,'Index'])->name('subcategories');
Route::get('/add/subcategory',[SubCategoryController::class,'AddSubCategory'])->name('add.subcategories');
Route::post('/store/subcategory',[SubCategoryController::class,'StoresubCategory'])->name('store.subcategories');
Route::get('/edit/subcategory/{id}',[SubCategoryController::class,'EditsubCategory'])->name('edit.subcategories');
Route::post('/update/subcategory/{id}',[SubCategoryController::class,'UpdatesubCategory'])->name('update.subcategories');
Route::get('/delete/subcategory/{id}',[SubCategoryController::class,'DeletesubCategory'])->name('delete.subcategories');


// Admin District Route
Route::get('/district',[DistrictController::class,'Index'])->name('districts');
Route::get('/add/district',[DistrictController::class,'AddDistrict'])->name('add.districts');
Route::post('/store/district',[DistrictController::class,'StoreDistrict'])->name('store.districts');
Route::get('/edit/district/{id}',[DistrictController::class,'EditDistrict'])->name('edit.districts');
Route::post('/update/district/{id}',[DistrictController::class,'UpdateDistrict'])->name('update.districts');
Route::get('/delete/district/{id}',[DistrictController::class,'DeleteDistrict'])->name('delete.districts');

// Admin SubDistrict Route
Route::get('/subdistrict',[SubDistrictController::class,'Index'])->name('subdistricts');
Route::get('/add/subdistrict',[SubDistrictController::class,'AddSubdistrict'])->name('add.subdistricts');
Route::post('/store/subdistrict',[SubDistrictController::class,'StoreSubdistrict'])->name('store.subdistricts');
Route::get('/edit/subdistrict/{id}',[SubDistrictController::class,'EditSubdistrict'])->name('edit.subdistricts');
Route::post('/update/subdistrict/{id}',[SubDistrictController::class,'UpdateSubdistrict'])->name('update.subdistricts');
Route::get('/delete/subdistrict/{id}',[SubDistrictController::class,'DeleteSubdistrict'])->name('delete.subdistricts');

// AJAX data for category and district
Route::get('/get/subcategory/{subcategory_id}',[PostController::class,'GetSubcategory']);
Route::get('/get/subdistrict/{subdistrict_id}',[PostController::class,'GetSubdistrict']);

// Admin Post Route
Route::get('/all/post',[PostController::class,'Index'])->name('all.posts');
Route::get('/create/post',[PostController::class,'CreatePost'])->name('create.posts');
Route::post('/store/post',[PostController::class,'StorePost'])->name('store.posts');
Route::get('/edit/post/{id}',[PostController::class,'EditPost'])->name('edit.posts');
Route::post('/update/post/{id}',[PostController::class,'UpdatePost'])->name('update.posts');
Route::get('/delete/post/{id}',[PostController::class,'DeletePost'])->name('delete.posts');

// Admin Social Route
Route::get('/social/setting',[SocialController::class,'SocialSetting'])->name('social.setting');
Route::post('/update.socialsetting/{id}',[SocialController::class,'UpdateSocialSetting'])->name('update.socialsetting');

// Admin SEO Route
Route::get('/seo/setting',[SocialController::class,'SeoSetting'])->name('seo.setting');
Route::post('/update/seosetting/{id}',[SocialController::class,'UpdateSeoSetting'])->name('update.seosetting');

// Admin Prayer Route
Route::get('/prayer/setting',[SocialController::class,'PrayerSetting'])->name('prayer.setting');
Route::post('/prayer/setting/{id}',[SocialController::class,'UpdatePrayerSetting'])->name('update.prayersetting');

// Admin LiveTV Route
Route::get('/livetv/setting',[SocialController::class,'LivetvSetting'])->name('livetv.setting');
Route::post('/update/livetvsetting/{id}',[SocialController::class,'UpdateLivetvSetting'])->name('update.livetvsetting');
Route::get('/active/livetv/{id}',[SocialController::class,'ActiveLiveTV'])->name('active.livetv');
Route::get('/deactive/livetv/{id}',[SocialController::class,'DeActiveLiveTV'])->name('deactive.livetv');

// Admin Notice Route
Route::get('/notice/setting',[SocialController::class,'NoticeSetting'])->name('notice.setting');
Route::post('/update/noticesetting/{id}',[SocialController::class,'UpdateNoticeSetting'])->name('update.noticesetting');
Route::get('/activate/noticesetting/{id}',[SocialController::class,'ActiveNoticeSetting'])->name('active.noticesetting');
Route::get('/deactivate/noticesetting/{id}',[SocialController::class,'DeActiveNoticeSetting'])->name('deactive.noticesetting');

// Admin Website Setting Route
Route::get('/website/setting',[WebsiteController::class,'Websitesetting'])->name('website.setting');
Route::get('/add/websitesetting',[WebsiteController::class,'AddWebsitesetting'])->name('add.websitesetting');
Route::post('/store/websitesetting',[WebsiteController::class,'StoreWebsitesetting'])->name('store.websitesetting');
Route::get('/edit/websitesetting/{id}',[WebsiteController::class,'EditeWebsitesetting'])->name('edit.websitesetting');
Route::post('/update/websitesetting/{id}',[WebsiteController::class,'UpdateWebsitesetting'])->name('update.websitesetting');
Route::get('/delete/websitesetting/{id}',[WebsiteController::class,'DeleteWebsitesetting'])->name('delete.websitesetting');

// Admin Gallery Route
Route::get('/photo/gallery',[GalleryController::class,'Photogallery'])->name('photo.gallery');
Route::get('/add/photogallery',[GalleryController::class,'AddPhotogallery'])->name('add.photogallery');
Route::post('/store/photogallery',[GalleryController::class,'StorePhotogallery'])->name('store.photogallery');
Route::get('/edit/photogallery/{id}',[GalleryController::class,'EditPhotogallery'])->name('edit.photogallery');
Route::post('/update/photogallery/{id}',[GalleryController::class,'UpdatePhotogallery'])->name('update.photogallery');
Route::get('/delete/photogallery/{id}',[GalleryController::class,'DeletePhotogallery'])->name('delete.photogallery');

// AdmiN video Route
Route::get('/video/gallery',[VideosController::class,'Videogallery'])->name('video.gallery');
Route::get('/create/videogallery',[VideosController::class,'CreateVideogallery'])->name('create.videogallery');
Route::post('/add/videogallery',[VideosController::class,'AddVideogallery'])->name('add.videogallery');
Route::get('/add/videogallery/{id}',[VideosController::class,'EditVideogallery'])->name('edit.videogallery');
Route::post('/update/videogallery/{id}',[VideosController::class,'UpdateVideogallery'])->name('update.videogallery');
Route::get('/delete/videogallery/{id}',[VideosController::class,'DeleteVideogallery'])->name('delete.videogallery');

// Admin Advertisement
Route::get('/add/list',[AddvertisementController::class,'Addvertisement'])->name('list.add');
Route::get('/create/list',[AddvertisementController::class,'CreateAddvertisement'])->name('create.listad');
Route::post('/store/list',[AddvertisementController::class,'StoreAddvertisement'])->name('store.adslist');
Route::get('/edit/list/{id}',[AddvertisementController::class,'EditAddvertisement'])->name('edit.adslist');
Route::post('/update/list/{id}',[AddvertisementController::class,'UpdateAddvertisement'])->name('update.adslist');
Route::get('/delete/list/{id}',[AddvertisementController::class,'DeleteAddvertisement'])->name('delete.adslist');


// Admin user Roll Router
Route::get('/add.writter',[RollController::class,'InsertUserRoll'])->name('add.writter');
Route::post('/store.writter',[RollController::class,'StoretUserRoll'])->name('store.writter');
Route::get('/all.writter',[RollController::class,'AllUserRoll'])->name('all.writter');
Route::get('/edit.writter/{id}',[RollController::class,'EditUserRoll'])->name('edit.writter');
Route::post('/update.writter/{id}',[RollController::class,'UpdateUserRoll'])->name('update.writter');
Route::post('/delete.writter/{id}',[RollController::class,'DeleteUserRoll'])->name('delete.writter');

// Admin all WebsiteSetting Route
Route::get('/allwebsite/setting',[WebsiteSettingController::class,'AllWebsiteSetting'])->name('allwebsite.setting');
Route::post('/update/allwebsite/setting/{id}',[WebsiteSettingController::class,'UpdateAllWebsiteSetting'])->name('updateallwebsite.setting');


// Admin account setting
Route::get('/account/settting',[AdminController::class,'AccountSetting'])->name('account.setting');
Route::get('/profile/edit',[AdminController::class,'ProfileEdit'])->name('profile.edit');
Route::post('/strore/profile/{id}',[AdminController::class,'StoreProfile'])->name('store.profile');

// Admin Password Change Route
Route::get('/show/password',[AdminController::class,'ShowPass'])->name('show.password');
Route::post('/change/password',[AdminController::class,'ChangePass'])->name('change.password');

