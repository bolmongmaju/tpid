<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;

use App\Models\Event;
use App\Models\Tag;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Category;
use App\Models\Download;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Infografis;
use App\Models\News;
use App\Models\Photo;
use App\Models\Potensi;
use App\Models\Profile;
use App\Models\Video;

class PageController extends Controller
{
    public function index(){
        $postssatu = News::with('tags')->take(1)->latest()->get();
        $posts = News::with('tags')->take(3)->latest()->get();
        $infografis = Infografis::take(4)->latest()->get();
        $postskegiatan = Category::where('name','kegiatan')->with('news')->take(4)->latest()->get();
        $events = Event::take(2)->latest()->get();
        $sliders = Slider::latest()->get();
        $services = Service::all();
        return view('opd/index',compact(
            'posts','events','sliders','services','postssatu','postskegiatan','infografis'));
    }

    public function eventDetail(Request $request, $id){
          
        return view('bolmongkab/detail/agenda-detail',compact('events'));
    }

    public function program(){
        $program = Profile::take(1)->latest()->get();
        return view('opd/detail/program',compact('program'));
    }

    public function pegawai(){
        $pegawai = Profile::take(1)->latest()->get();
        return view('opd/detail/pegawai',compact('pegawai'));
    }

    public function tupoksi(){
        $tupoksi = Profile::take(1)->latest()->get();
        return view('opd/detail/tupoksi',compact('tupoksi'));
    }

    public function visimisi(){
        $visimisi = Profile::take(1)->latest()->get();
        return view('opd/detail/visimisi',compact('visimisi'));
    }

    public function foto(){
        $foto = Photo::latest()->paginate(12);
        return view('opd/detail/foto',compact('foto'));
    }
    public function video(){
        $video = Video::latest()->paginate(12);
        return view('opd/detail/video',compact('video'));
    }
    public function kontak(){
        $kontak = Contact::take(1)->latest()->get();
        return view('opd/detail/kontak',compact('kontak'));
    }
    
    public function struktur(){
        $struktur = Profile::take(1)->latest()->get();
        return view('opd/detail/struktur',compact('struktur'));
    }

    public function potensi(){
        $potensi = Potensi::take(1)->latest()->get();
        return view('opd/detail/potensi',compact('potensi'));
    }

    public function dasarhukum(){
        $dasarhukum = Profile::take(1)->latest()->get();
        return view('opd/detail/dasarhukum',compact('dasarhukum'));
    }

    public function event(){
        $events = Event::latest()->paginate(5);
        return view('opd/detail/agenda',compact('events'));
    }

    public function download(){
        $downloads = Download::latest()->paginate(5);
        return view('bolmongkab/detail/download',compact('downloads'));
    }

    public function getDownload(Request $request, $id) {
        $downloads = Download::where('id', $id)->firstOrFail();
        return view('admin.download.show',compact('downloads'));
    }

    public function berita(Request $request) {
        $kategori = Category::latest()->get();
        $posts = News::latest()->Paginate(5);
        $sidebar = News::skip(5)->Paginate(5);
        $tags = Tag::get();
        
        return view('opd/detail/berita',compact('posts','kategori','sidebar','tags'));
    }

    public function beritaDetail(Request $request, $id){
        if($request->has('cari')){
            $kategori = Category::latest()->get();
            $tags = Tag::latest()->get();
            $sidebar = News::skip(5)->Paginate(5);
            $posts = News::where('title','LIKE','%'.$request->cari.'%')->with('kategori')->get();
            return view('opd/detail/berita',compact('posts','kategori','sidebar','tags'));
        } else {
            $kategori = Category::latest()->simplePaginate(5);
            $posts = News::where('id', $id)->firstOrFail();
            $tags = Tag::latest()->get();
            $sidebar = News::skip(5)->Paginate(5);
            return view('opd/detail/berita-detail',compact('posts','sidebar','kategori','tags'));
        }

    }

    public function hascarberita(Request $request) {
        if($request->has('cari')){
            $kategori = Category::latest()->get();
            $tags = Tag::latest()->get();
            $sidebar = News::skip(5)->Paginate(5);
            $posts = News::where('title','LIKE','%'.$request->cari.'%')->get();
        } else {
            $kategori = Category::latest()->simplePaginate(5);
            $posts = News::where('id', $id)->firstOrFail();
            $tags = Tag::latest()->get();
            $sidebar = News::skip(5)->Paginate(5);
        }
        return view('opd/detail/hascarberita',compact('posts','kategori','sidebar','tags'));
    }


    public function kategori(Category $category) {
       
            $kategori = Category::latest()->get();
            $tags = Tag::latest()->get();
            $sidebar = News::skip(5)->Paginate(5);
            $posts = $category->news()->latest()->paginate(4);

        return view('opd/detail/berita',compact('posts','kategori','sidebar','tags'));
    }

    public function tag(Tag $tag) {
       
        $kategori = Category::latest()->get();
        $tags = Tag::latest()->get();
        $sidebar = News::skip(5)->Paginate(5);
        $posts = $tag->news()->latest()->paginate(4);

    return view('opd/detail/berita',compact('posts','kategori','sidebar','tags'));
}
}
