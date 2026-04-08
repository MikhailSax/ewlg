<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/sitemap.xml', SitemapController::class)->name('sitemap');
Route::get('/robots.txt', function () {
    $body = "User-agent: *\nDisallow:\n\nSitemap: ".url('/sitemap.xml');

    return response($body, 200, ['Content-Type' => 'text/plain; charset=UTF-8']);
})->name('robots');

Route::get('/', [PageController::class, 'show'])->defaults('slug', 'home')->name('home');
Route::get('/about', [PageController::class, 'show'])->defaults('slug', 'about')->name('about');
Route::get('/services', [PageController::class, 'show'])->defaults('slug', 'services')->name('services');
Route::get('/services/aviation', [PageController::class, 'show'])->defaults('slug', 'service-aviation')->name('service.single');
Route::get('/advantages', [PageController::class, 'show'])->defaults('slug', 'advantages')->name('advantages');
Route::get('/cases', [PageController::class, 'show'])->defaults('slug', 'cases')->name('cases');
Route::get('/reviews', [PageController::class, 'show'])->defaults('slug', 'reviews')->name('reviews');
Route::get('/faq', [PageController::class, 'show'])->defaults('slug', 'faq')->name('faq');
Route::get('/contacts', [PageController::class, 'show'])->defaults('slug', 'contacts')->name('contacts');

Route::get('/blog', [PageController::class, 'show'])->defaults('slug', 'blog')->name('blog');
Route::get('/blog/sample', [PageController::class, 'show'])->defaults('slug', 'blog-sample')->name('blog.single');
Route::get('/team', [PageController::class, 'show'])->defaults('slug', 'team')->name('team');
Route::get('/projects', [PageController::class, 'show'])->defaults('slug', 'projects')->name('projects');
Route::get('/projects/sample', [PageController::class, 'show'])->defaults('slug', 'project-sample')->name('project.single');
Route::get('/pricing', [PageController::class, 'show'])->defaults('slug', 'pricing')->name('pricing');
Route::get('/licenses', [PageController::class, 'show'])->defaults('slug', 'licenses')->name('licenses');
Route::get('/changelog', [PageController::class, 'show'])->defaults('slug', 'changelog')->name('changelog');
Route::get('/protected', [PageController::class, 'show'])->defaults('slug', 'protected')->name('protected');

Route::post('/leads', [\App\Http\Controllers\LeadController::class, 'store'])->name('leads.store');

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
