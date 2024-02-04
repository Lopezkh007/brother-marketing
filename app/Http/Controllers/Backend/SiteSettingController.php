<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function index($type)
    {
        $model = SiteSetting::where('type','LIKE', $type)->firstOrFail();
        $model->content = json_decode($model->content);
        return view('admin.pages.site-setting.'.$type, $model);
    }

    public function onSave(Request $req, $type)
    {
        $item = [];
        switch ($type) {
            case 'general':
                $item = $this->_generalMapper($req);
                break;
            case 'contact':
                $item = $this->_contactMapper($req);
                break;
            case 'home':
                $item = $this->_homeMapper($req);
                break;
            case 'about':
                $item = $this->_aboutMapper($req);
                break;
            default:
                $item = [];
                break;
        }

        $model = SiteSetting::where('type', $type)->firstOrFail();
        $model->update(["content" => json_encode($item)]);

        $req->session()->flash('success', 'Save successfully');
        return redirect()->back();
    }

    private function _generalMapper(Request $body){
        return [
            "title" => $body->content['title'] ?: "",
            "author" => $body->content['author'] ?: "",
            "keyword" => $body->content['keyword'] ?: "",
            "description" => $body->content['description'] ?: "",
            "image" => $body->image ?: "",
            "logo_header" => $body->image2 ?: "",
            "logo_footer" => $body->image3 ?: ""
        ];
    }
    private function _contactMapper(Request $body){
        return [
            "address_en" => $body->content['address_en'],
            "address_kh" => $body->content['address_kh'],
            "telephone1" => $body->content['telephone1'],
            "telephone2" => $body->content['telephone2'],
            "email1" => $body->content['email1'],
            "email2" => $body->content['email2'],
            "facebook" => $body->content['facebook'],
            "instagram" => $body->content['instagram'],
            "twitter" => $body->content['twitter'],
            "youtube" => $body->content['youtube'],
            "map_embed_link" => $body->content['map_embed_link']
        ];
    }

    private function _aboutMapper(Request $body){
        return [
            "title_eng" => $body->content['title_eng'],
            "title_kh" => $body->content['title_kh'],
            "description_eng" => $body->content['description_eng'],
            "description_kh" => $body->content['description_kh'],
            "image" => $body->image ?: "",
            "image2" => $body->image2 ?: "",
            "image3" => $body->image3 ?: "",
            "image4" => $body->image4 ?: "",
            "image5" => $body->image5 ?: "",
            "image6" => $body->image6 ?: "",
            "vision_eng" => $body->content['vision_eng'],
            "vision_kh" => $body->content['vision_kh'],
            "ourvalues_eng" => $body->content['ourvalues_eng'],
            "ourvalues_kh" => $body->content['ourvalues_kh'],
            "ourmission_eng" => $body->content['ourmission_eng'],
            "ourmission_kh" => $body->content['ourmission_kh']
        ];
    }
}
