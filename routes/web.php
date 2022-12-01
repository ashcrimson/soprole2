<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RestorePasswordController;
use App\Http\Controllers\Management\PageController;
use App\Http\Controllers\Management\ProfileController;
use App\Http\Controllers\Management\SectionController;
use App\Http\Controllers\Management\UserController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

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

/*** ROUTES MANAGEMENT ***/

Route::group(['prefix' => 'administracion', 'as' => 'administracion.'], function () {

    /** ROUTES PUBLIC *****/
    Route::view('login', 'management.auth.login')->name('login');
    
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');

    /** AUTH *****/
    Route::controller(LoginController::class)->group(function () {
        Route::post('process-login', 'processLogin')->name('process.login');
        Route::post('logout', 'logout')->name('logout')->middleware('auth');
    });
    
    /** RESTORE PASSWORD *****/
    Route::controller(RestorePasswordController::class)->group(function () {
        Route::post('process-forgot-password', 'processForgotPassword')->name('process.forgot.password');
        Route::get('form-forgot-password/{token}', 'formForgotPassword')->name('form.forgot.password');
        Route::post('update-forgot-password', 'updateForgotPassword')->name('update.forgot.password');
    });

    /** ROUTES PROTECTED *****/
    Route::group(['middleware' => ['auth', 'role:Admin']], function () {

        Route::view('dashboard', 'management.index')->name('index');

        /** MODULE PROFILE *****/
        Route::controller(ProfileController::class)->group(function () {
            Route::post('update-password', 'updatePassword')->name('update.password');
            Route::post('update-profile', 'updateProfile')->name('update.profile');
        });

        /** MODULE USER *****/
        // Route::resource('users', UserController::class);

        /** MODULE PAGES *****/
        Route::controller(PageController::class)->group(function () {
            Route::get('pagina/{page}', 'index')->name('page.index');
            Route::get('secciones/{slug}', 'getSections')->name('page.sections');
        });

        Route::resource('section', SectionController::class);

    });

});


/*** ROUTES WEB ***/

Route::group(['as' => 'web.'], function () {

    Route::get('/', function () {
        return view('web.home');
    });
    
    
    Route::get('nosotros/proposito', function () {
        return view('web.nosotros.proposito');
    });
    Route::get('nosotros/nuestras-historia', function () {
        return view('web.nosotros.historia');
    });
    Route::get('nosotros/administracion', function () {
        return view('web.nosotros.administracion');
    });
    Route::get('nosotros/emisor', function () {
        return view('web.nosotros.emisor');
    });
    Route::get('nosotros/productores-de-leche', function () {
        return view('web.nosotros.productores');
    });
    Route::get('nosotros/aviso-legal', function () {
        return view('web.nosotros.legal');
    });

    Route::get('marcas', function () {
        return view('web.productos.marcas');
    });
    
    Route::get('productos', function () {
        return view('web.productos.index');
    });
    
    Route::get('productos/tipoYoghurt', function () {
        return view('web.productos.tipoYoghurt.index');
    });
    Route::get('productos/tipoYoghurt/yoghurt', function () {
        return view('web.productos.tipoYoghurt.yoghurt.index');
    });
    Route::get('productos/tipoYoghurt/yoghurt/yoghurt-batifrut-Selección', function () {
        return view('web.productos.tipoYoghurt.yoghurt.detalle');
    });
    
    Route::get('novedades', function () {
        return view('web.novedades.index');
    });
    Route::get('novedades/detalle', function () {
        return view('web.novedades.detalle');
    });
    
    Route::get('oficinas', function () {
        return view('web.oficinas.index');
    });
    
    Route::get('contacto', function () {
        return view('web.contacto.index');
    });
    Route::get('contacto/mensaje', function () {
        return view('web.contacto.mensaje');
    });

    Route::get('nutriendo-sonrisas/ssc/en-que-consiste', function () {
        return view('web.nutriendoSonrisas.ssc.ssc');
    });
    Route::get('/nutriendo-sonrisas/ssc/acopio-retiro', function () {
        return view('web.nutriendoSonrisas.ssc.acopio_retiro');
    });
    Route::get('/nutriendo-sonrisas/ssc/como-reciclar', function () {
        return view('web.nutriendoSonrisas.ssc.como_reciclar');
    });
    Route::get('/nutriendo-sonrisas/ssc/cuanto-llevamos-reciclando', function () {
        return view('web.nutriendoSonrisas.ssc.cuanto_llevamos_reciclando');
    });
    Route::get('/nutriendo-sonrisas/ssc/que-hacemos-reciclado', function () {
        return view('web.nutriendoSonrisas.ssc.que_hacemos_reciclado');
    });
    Route::get('/nutriendo-sonrisas/ssc/interescolar-ssc', function () {
        return view('web.nutriendoSonrisas.ssc.interescolar');
    });



    Route::get('/nutriendo-sonrisas/escolar/d-escolar', function () {
        return view('web.nutriendoSonrisas.escolar.escolar');
    });
    Route::get('/nutriendo-sonrisas/escolar/deportivo', function () {
        return view('web.nutriendoSonrisas.escolar.deportivo');
    });


    
    Route::get('/nutriendo-sonrisas/sociales/teleton', function () {
        return view('web.nutriendoSonrisas.sociales.teleton');
    });
    Route::get('/nutriendo-sonrisas/sociales/campañas', function () {
        return view('web.nutriendoSonrisas.sociales.campannas');
    });


    Route::get('spd/cultura-corporativa', function () {
        return view('web.spd.cultura');
    });
    Route::get('spd/trabajadores', function () {
        return view('web.spd.trabajadores');
    });
    Route::get('spd/voluntariado', function () {
        return view('web.spd.voluntariado');
    });
    Route::get('spd/proceso-de-la-leche', function () {
        return view('web.spd.proceso_leche');
    });
    Route::get('spd/proceso-del-yoghurt', function () {
        return view('web.spd.proceso_yoghurt');
    });
    Route::get('spd/nuestros-productores', function () {
        return view('web.spd.productores');
    });
    Route::get('spd/nuestras-certificaciones', function () {
        return view('web.spd.certificaciones');
    });
    

    Route::get('404', function () {
        return view('web.404.index');
    });
}); 






