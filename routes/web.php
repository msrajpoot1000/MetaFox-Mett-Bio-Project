<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductdetailsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogdetailsController;
use App\Http\Controllers\CompanyinfoController;
use App\Http\Controllers\HomesliderController;
use App\Http\Controllers\AllbannerController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ServeController;
use App\Http\Controllers\TeacherController;



// frontend
Route::get('/', [IndexController::class, 'index'])->name('website.frontend.index');

Route::get('/information', [IndexController::class, 'information'])->name('website.frontend.information');

Route::get('/aboutus', [AboutController::class, 'about'])->name('website.frontend.aboutus');

Route::get('/contactus', [ContactController::class, 'contact'])->name('website.frontend.contactus');

Route::get('/Certificates', [CertificateController::class, 'certificate'])->name('website.frontend.certificate');

Route::get('/products/category/{id}', [ProductController::class, 'product'])->name('website.frontend.product');

Route::get('/productdetails/{id}', [ProductdetailsController::class, 'productdetails'])->name('website.frontend.product-details');

Route::get('/blog', [BlogController::class, 'blog'])->name('website.frontend.blog');

Route::get('/blogdetails', [BlogdetailsController::class, 'blogdetails'])->name('website.frontend.blog-details');

Route::get('/our-team', [TeamController::class, 'team'])->name('team'); 

Route::get('/blog-details-{id}', [BlogController::class, 'show'])->name('blog.details');


Route::get('/dashboard', function () {
    return view('website.admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




                                        // Admin route

// company information
 Route::get('/edit-companyinformation', [CompanyinfoController::class, 'edit_companyinfo'])->middleware(['auth', 'verified'])->name('companyinfo');
 Route::post('/companyinfo/store', [CompanyinfoController::class, 'store'])->middleware(['auth', 'verified'])->name('edit.companyinfo');
 Route::delete('/companyinfo/{id}', [CompanyinfoController::class, 'destroy'])->middleware(['auth', 'verified'])->name('companyinfo.destroy');
 

// Home Slider section

 Route::get('/homeslider', [HomesliderController::class, 'homeslider'])->middleware(['auth', 'verified'])->name('website.admin.homeslider');
 Route::post('/homeslider/store', [HomesliderController::class, 'store'])->middleware(['auth', 'verified'])->name('homeslider.store');
 Route::delete('/homeslider/delete/{id}', [HomesliderController::class, 'destroy'])->middleware(['auth', 'verified'])->name('homeslider.destroy');



// All banner section

 Route::get('/allbanner', [AllbannerController::class, 'allbanner'])->middleware(['auth', 'verified'])->name('website.admin.allbanner');
 Route::post('/allbanner/store', [AllbannerController::class, 'store'])->middleware(['auth', 'verified'])->name('allbanners.store');
 Route::delete('/allbanner/{id}/{field}', [AllbannerController::class, 'destroy'])->middleware(['auth', 'verified'])->name('allbanners.destroy');
 
 
 // Product section

 Route::get('/producttype', [ProductController::class, 'productcategory'])->middleware(['auth', 'verified'])->name('website.admin.productcategory');
 Route::post('/producttype/store', [ProductController::class, 'productcategorystore'])->middleware(['auth', 'verified'])->name('productcategory.store');
 Route::delete('/productcategory/destroy/{id}', [ProductController::class, 'productcategorydestroy'])->middleware(['auth', 'verified'])->name('productcategory.destroy');
 
 Route::get('/addproduct', [ProductController::class, 'addproduct'])->middleware(['auth', 'verified'])->middleware(['auth', 'verified'])->name('website.admin.add-product');
  Route::post('/product/store', [ProductController::class, 'store'])->middleware(['auth', 'verified'])->middleware(['auth', 'verified'])->name('product.store');
 Route::delete('/product/{id}/delete', [ProductController::class, 'destroy'])->middleware(['auth', 'verified'])->middleware(['auth', 'verified'])->name('product.destroy');
 
Route::get('/product/edit/{id}', [ProductController::class, 'editproduct'])->middleware(['auth', 'verified'])->name('product.edit');
Route::put('/product/update/{id}', [ProductController::class, 'updateproduct'])->middleware(['auth', 'verified'])->name('product.update');



Route::get('/edit-productcategory/{id}', [ProductController::class, 'editproductcategory'])->middleware(['auth', 'verified'])->name('productcategory.edit');
Route::post('/update-productcategory/{id}', [ProductController::class, 'updateproductcategory'])->middleware(['auth', 'verified'])->name('productcategory.update');



// Contact section
Route::post('/contact-submit', [ContactController::class, 'contactstore'])->middleware(['auth', 'verified'])->name('contact.store');
Route::delete('/contact/{id}', [ContactController::class, 'contactdestroy'])->middleware(['auth', 'verified'])->name('contact.destroy');
Route::get('/view-contact', [ContactController::class, 'viewcontact'])->middleware(['auth', 'verified'])->name('contact.view');


// tesimonials section
Route::get('/testimonials', [TestimonialController::class, 'testimonial'])->middleware(['auth', 'verified'])->name('testimonial'); 
Route::post('/testimonial/store', [TestimonialController::class, 'testimonialstore'])->middleware(['auth', 'verified'])->name('testimonial.store');
Route::delete('/testimonial/{id}', [TestimonialController::class, 'testimonialdestroy'])->middleware(['auth', 'verified'])->name('testimonial.destroy');


// serve section
Route::get('/serve', [ServeController::class, 'serve'])->middleware(['auth', 'verified'])->name('serve'); 
Route::post('/serve/store', [ServeController::class, 'storeserve'])->middleware(['auth', 'verified'])->name('serve.store');
Route::get('/serve-edit/{id}', [ServeController::class, 'editserve'])->middleware(['auth', 'verified'])->name('serve.edit');
Route::post('/update-serve/{id}', [ServeController::class, 'updateserve'])->middleware(['auth', 'verified'])->name('serve.update');
Route::delete('/serve/{id}', [ServeController::class, 'destroyserve'])->middleware(['auth', 'verified'])->name('serve.destroy');


// certificate section

Route::get('/certificates', [CertificateController::class, 'addcertificate'])->middleware(['auth', 'verified'])->name('add.certificate');
Route::post('/certificates/store',  [CertificateController::class, 'certificatestore'])->middleware(['auth', 'verified'])->name('certificate.store'); 
Route::delete('/certificates/{id}', [CertificateController::class, 'certificatedestroy'])->middleware(['auth', 'verified'])->name('certificate.destroy');


// blog section
Route::get('add-blog', [BlogController::class, 'add_blog'])->middleware(['auth', 'verified'])->name('add.blog');
Route::post('/blog-store', [BlogController::class, 'blog_store'])->middleware(['auth', 'verified'])->name('blog.store');
Route::get('update-blog/{id}', [BlogController::class, 'update_blog'])->middleware(['auth', 'verified'])->name('update.blog');
Route::delete('/blog-Delete/{id}', [BlogController::class, 'destroy'])->middleware(['auth', 'verified'])->name('blog.dlt');
Route::post('/blog-store/{id}', [BlogController::class, 'blog_updateStore'])->middleware(['auth', 'verified'])->name('blog.updateStore');



// teacher section
Route::get('add_teacher', [TeacherController::class, 'add_teacher'])->middleware(['auth', 'verified'])->name('add.teacher');
Route::get('teachers/{id}/edit', [TeacherController::class, 'edit'])->name('teachers.edit');
Route::post('teachers/store', [TeacherController::class, 'store'])->middleware(['auth', 'verified'])->name('teachers.store');
Route::put('teachers/{id}/update', [TeacherController::class, 'update'])->middleware(['auth', 'verified'])->name('teachers.update');
Route::delete('teachers/{id}/delete', [TeacherController::class, 'destroy'])->middleware(['auth', 'verified'])->name('teachers.destroy');


// about us section
Route::get('view/about', [AboutController::class, 'view_about'])->middleware(['auth', 'verified'])->name('view.about');
Route::get('add/about', [AboutController::class, 'add_about'])->middleware(['auth', 'verified'])->name('add.about');
Route::post('about/store', [AboutController::class, 'about_store'])->middleware(['auth', 'verified'])->name('about.store');
Route::delete('about/delete', [AboutController::class, 'destroy_about'])->middleware(['auth', 'verified'])->name('about.destroy');




