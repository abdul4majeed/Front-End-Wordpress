<?php
use App\HomeSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\SubLink;

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

Route::resource('team','TeamController');

Route::resource('teamHeader','TeamHeaderController');


Route::resource('footerCopyWrite','FooterCopyWriteController');
Route::resource('footerContect','FooterContectController');
Route::resource('careerHeader','CareerHeaderController');
Route::resource('testimonialBodySection','TestimonialBodySectionController');
Route::resource('testimonialHeaderSection','TestimonialHeaderSectionController');
Route::resource('projectHeaderProjectSection','ProjectHeaderProjectSectionController');
Route::resource('projectHeaderSection','ProjectHeaderSectionController');
Route::resource('servicesHeader','ServicesHeaderController');
Route::resource('aboutUsExperienceProcessBody','AboutUsBodyExperienceProcessBodySectionController');
Route::resource('aboutUsExperienceProcess','AboutUsBodyExperienceProcessSectionController');
Route::resource('aboutUsExperienceRight','AboutUsBodyExperienceRightSectionController');
Route::resource('aboutUsBodyExperienceSection','AboutUsBodyExperienceSectionController');
Route::resource('aboutUsBodySection','AboutUsBodySectionController');
Route::resource('about_us_section','AboutUsController');

Route::resource('career_data','CareerManageController');


Route::resource('contact_us_data','ContactUsManageController');

Route::resource('home_section','HomeSectionController');

Route::resource('image','AdminControlImageController');

Route::get('/',function(){
    return view('dash');
})->name('dash');
Route::resource('career','AdminManageCareerMessageController');


Route::resource('contact_us','AdminManageContactUs');

Route::get('links/{link}',function(\App\Link $link){
    if(!$link->link_content->isEmpty())
    {
        return view('sublinkcontent',['data'=> $link->link_content[0]->content] );
    }
    else
    {
        return "empty";
    }
})->name('pages');


Route::get('sub_links/{id}',function($id){
    
    $sub_link = SubLink::with('sub_link_contents')->where('id',$id)->get()->first();
    if(!$sub_link->sub_link_contents->isEmpty())
    {
        return view('sublinkcontent',['data'=> $sub_link] );
    }
    else
    {
        return "empty";
    }
})->name('sub_pages');





Route::resource('user','AdminManageUserController');
Route::resource('link','AdminManageLinksController');
Route::resource('link_content','AdminManageLinkContentController');
Route::resource('sub_link','AdminManageSubLinkController');
Route::resource('sub_link_content','AdminManageSubLinkContentController');

Route::post('reg_adm','AdminManageUserController@reg_adm')->name('reg_adm');

Route::group(['prefix' => 'admin'], function () {

    Auth::routes();

});

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/team_page',function(){

    return view('team');
})->name('team');


Route::get('/test2',function(){

    // dd(\App\SubLink::all()[6]->sub_link_contents->isEmpty());
    // foreach(\App\SubLink::all() as $k)
    // {
    //     dd ($k[0]->sub_link_contents);
    // }
    foreach (\App\SubLink::with('sub_link_contents')->get() as $sub_link)
    {
        $something = false;
        if($sub_link->sub_link_contents->isEmpty())
        {
            $something=true;
        }
        else
        {
            foreach($sub_link->sub_link_contents as $contents)
            {
    
                if($contents == null )
                {
                    
                    dd('inner');
                }
                else
                {
                    echo $sub_link->sub_link . "\n";
                }
               
            }
        }
    }
    dd($something);

});