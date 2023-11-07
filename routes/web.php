<?php

use App\Http\Controllers\GigController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\CondidatController;
use App\Http\Controllers\ReponseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RaitingController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;

use App\Http\Controllers\AlertController;

use App\Http\Controllers\replyalertController;

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


Route::fallback(function () {
    return view('errors.404'); // Change 'errors.404' to match the path to your custom 404 error page
});

Route::get('/dash', function () {
    return view('Front.Dashboard');
});



Route::get('/', [HomeController::class, 'index'])->name('Home');
Route::get('/allgigs', [HomeController::class, 'projects'])->name('projects');


Route::get('/reponses', [ReponseController::class, 'index'])->name('Admin.Reponse.index')->middleware(\App\Http\Middleware\CacheAdminCheck::class);
Route::get('/reponses/create', [ReponseController::class, 'create'])->name('Admin.Reponse.create')->middleware(\App\Http\Middleware\CacheAdminCheck::class);
Route::post('/reponses/store', [ReponseController::class, 'store'])->name('Admin.Reponse.store')->middleware(\App\Http\Middleware\CacheAdminCheck::class);
Route::get('/reponses/edit/{id}', [ReponseController::class, 'edit'])->name('Admin.Reponse.edit')->middleware(\App\Http\Middleware\CacheAdminCheck::class);
Route::post('/reponses/update/{id}', [ReponseController::class, 'update'])->name('Admin.Reponse.update')->middleware(\App\Http\Middleware\CacheAdminCheck::class);
Route::delete('/reponses/destroy/{id}', [ReponseController::class, 'destroy'])->name('Admin.Reponse.destroy')->middleware(\App\Http\Middleware\CacheAdminCheck::class);

Route::get('/condidats', [CondidatController::class, 'index'])->name('Front.Condidat.index');
Route::get('/condidats/create', [CondidatController::class, 'create'])->name('Front.Condidat.create');
Route::post('/condidats/store', [CondidatController::class, 'store'])->name('Front.Condidat.store');
Route::get('/condidats/edit/{id}', [CondidatController::class, 'edit'])->name('Front.Condidat.edit');
Route::post('/condidats/update/{id}', [CondidatController::class, 'update'])->name('Front.Condidat.update');
Route::delete('/condidats/destroy/{id}', [CondidatController::class, 'destroy'])->name('Front.Condidat.destroy');
Route::get('/condidats/showC/{id}', [OfferController::class, 'showC'])->name('Front.Condidat.showC');

Route::get('/reponses/{id}', [ReponseController::class, 'getReponsesByCondidatId'])->name('Admin.Reponse.getReponsesByCondidatId')->middleware(\App\Http\Middleware\CacheAdminCheck::class);


Route::get('/condidatsAdmin', [CondidatController::class, 'indexx'])->name('Admin.Condidat.index')->middleware(\App\Http\Middleware\CacheAdminCheck::class);
Route::get('/condidatsAdmin/show/{id}', [CondidatController::class, 'show'])->name('Admin.Condidat.show')->middleware(\App\Http\Middleware\CacheAdminCheck::class);
Route::delete('/condidatsAdmin/destroy/{id}', [CondidatController::class, 'destroyy'])->name('Admin.Condidat.destroy')->middleware(\App\Http\Middleware\CacheAdminCheck::class);



Route::get('create',[GigController::class,'create'])->name('Front.Gig.Add')->middleware(\App\Http\Middleware\CacheUserCheck::class);
Route::post('store',[GigController::class,'store'])->name('Front.Gig.store')->middleware(\App\Http\Middleware\CacheUserCheck::class);



Route::get('/admin/skill',[SkillController::class,'index'])->name('admin.skills.index')->middleware(\App\Http\Middleware\CacheAdminCheck::class);
Route::get('/admin/skill/create',[SkillController::class,'create'])->name('admin.skills.create')->middleware(\App\Http\Middleware\CacheAdminCheck::class);
Route::post('/admin/skill/store', [SkillController::class, 'store'])->name('admin.skills.store')->middleware(\App\Http\Middleware\CacheAdminCheck::class);
Route::get('/admin/skill/{skill}/edit', [SkillController::class, 'edit'])->name('admin.skills.edit')->middleware(\App\Http\Middleware\CacheAdminCheck::class);
Route::patch('/admin/skill/{skill}', [SkillController::class, 'update'])->name('admin.skills.update')->middleware(\App\Http\Middleware\CacheAdminCheck::class);
Route::delete('/admin/skill/{skill}', [SkillController::class, 'destroy'])->name('admin.skills.destroy')->middleware(\App\Http\Middleware\CacheAdminCheck::class);



//__________________Front Offers_________________________
Route::get('/offers', [OfferController::class,'index'])->name('offers.index');
Route::get('/offers/create', [OfferController::class,'create'])->name('offers.create');
Route::post('/offers', [OfferController::class,'store'])->name('offers.store');


Route::get('edit/{id}',[GigController::class,'edit'])->name('Front.Gig.Edit')->middleware(\App\Http\Middleware\CacheUserCheck::class);
Route::post('update/{id}',[GigController::class,'update'])->name('Front.Gig.update')->middleware(\App\Http\Middleware\CacheUserCheck::class);
Route::get('delete/{id}',[GigController::class,'destroy'])->name('Front.Gig.delete')->middleware(\App\Http\Middleware\CacheUserCheck::class);
Route::get('/gigs',[GigController::class, 'indexForFreelancer'])->name('Front.Gig.index')->middleware(\App\Http\Middleware\CacheUserCheck::class);




Route::get('/gigs/{id}', [HomeController::class, 'singleProject'])->name('gig.show');

Route::post('/add-rating', [RaitingController::class, 'addRating'])->name('Raiting.store');
Route::post('/add-rating', [RaitingController::class, 'addRating'])->name('Raiting.store');


//Route::get('/{gigId}/ratings', [RaitingController::class,'showRating'])->name('gig.ratings');



 Route::get('/login',[LoginController::class, 'showLogin'])->name('login');
 Route::post('/login',[LoginController::class, 'login'])->name('user.login');




 Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
 Route::post('/register',[RegisterController::class, 'register'])->name('user.register');



 Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
//  Route::get('/check', [LoginController::class, 'checkIdUser'])->name('check');



////////////Category
Route::get('/category',[\App\Http\Controllers\CategoryController::class,'index'])->name('category.index');;
Route::post('/category/add',[\App\Http\Controllers\CategoryController::class,'store']);
Route::get('edit-category/{id}',[\App\Http\Controllers\CategoryController::class,'edit']);
Route::put('updateCategory',[\App\Http\Controllers\CategoryController::class,'update']);
Route::delete('deleteCategory',[\App\Http\Controllers\CategoryController::class,'destroy']);


/////Projets///////////////
Route::get('/projet',[\App\Http\Controllers\ProjetController::class,'index'])->name('projet.index');
Route::get('edit-projet/{id}',[\App\Http\Controllers\ProjetController::class,'edit']);
Route::delete('deleteProjet',[\App\Http\Controllers\ProjetController::class,'destroy']);
Route::put('updateProjet',[\App\Http\Controllers\ProjetController::class,'update']);
Route::post('/projet/add',[\App\Http\Controllers\ProjetController::class,'store']);
Route::get('/projetFront',[\App\Http\Controllers\ProjetController::class,'indexFront'])->name('projet.indexFront');;
Route::get('/projetFront2',[\App\Http\Controllers\ProjetController::class,'indexFront2'])->name('projet.indexFront2');;

///BLOOOG
Route::get('/blogs', [BlogController::class, 'index'])->name('Index');
Route::get('/blogs/create', [BlogController::class, 'create'])->name('CreateBlog');
Route::post('/blogs/store', [BlogController::class, 'store'])->name('StoreBlog');
Route::get('/blogs/edit/{id}', [BlogController::class, 'edit'])->name('EditBlog');
Route::post('/blogs/update/{id}', [BlogController::class, 'update'])->name('UpdateBlog');
Route::delete('/blogs/destroy/{id}', [BlogController::class, 'destroy'])->name('DestroyBlog');
Route::delete('/blogs/destroyAdmin/{id}', [BlogController::class, 'destroyAdmin'])->name('DestroyBlogAdmin')->middleware(\App\Http\Middleware\CacheAdminCheck::class);
Route::get('/blogsAdmin', [BlogController::class, 'indexAdmin'])->name('IndexAdmin')->middleware(\App\Http\Middleware\CacheAdminCheck::class);
Route::get('/blogDetails/{id}', [BlogController::class, 'show'])->name('DetailsBlog');

//COMMENT
Route::get('/comments', [CommentController::class, 'index'])->name('IndexComment');
Route::get('/comments/create', [CommentController::class, 'create'])->name('CreateComment');
Route::post('/comments/store', [CommentController::class, 'store'])->name('StoreComment');
Route::get('/comments/edit/{id}', [CommentController::class, 'edit'])->name('EditComment');
Route::post('/comments/update/{id}', [CommentController::class, 'update'])->name('UpdateComment');
Route::delete('/comments/destroy/{id}', [CommentController::class, 'destroy'])->name('DestroyComment');
Route::delete('/comments/destroyAdmin/{id}', [CommentController::class, 'destroyAdmin'])->name('DestroyCommentAdmin')->middleware(\App\Http\Middleware\CacheAdminCheck::class);
Route::get('/commentsAdmin', [CommentController::class, 'indexAdmin'])->name('IndexAdminComment')->middleware(\App\Http\Middleware\CacheAdminCheck::class);
Route::get('/commentDetails/{id}', [CommentController::class, 'show'])->name('DetailsComment');
Route::get('create',[GigController::class,'create'])->name('Front.Gig.Add');
Route::post('store',[GigController::class,'store'])->name('Front.Gig.store');
Route::get('/gigs',[GigController::class, 'indexForFreelancer'])->name('Front.Gig.index');
Route::get('/alertReply/{id}',[replyalertController::class, 'indexForFreelancers'])->name('Front.reply.show');



Route::get('createAlert',[AlertController::class,'create'])->name('Front.Alert.Add');
Route::post('storeAlert',[AlertController::class,'store'])->name('Front.Alert.store');
Route::get('/myAlerts',[AlertController::class, 'FreelancerIndex'])->name('Front.Alerts.index');
Route::get('/editAlert/{id}',[AlertController::class, 'edit'])->name('Front.Alerts.edit');
Route::put('/updateAlert/{id}',[AlertController::class, 'update'])->name('Front.Alert.update');
