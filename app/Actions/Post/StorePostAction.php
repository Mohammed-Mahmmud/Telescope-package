<?php
namespace App\Actions\Post;
use App\Helper\ImageHelper;
use App\Models\Post;
use Illuminate\Support\Arr;

class StorePostAction
{
    // use ImageHelper;
    public function handle(array $data){
        // dd($data);
    //  $imagename = $this->StoreImage($data['image']??'','Attachment/export/image');
    //  $bannername = $this->StoreImage($data['banner']??'','Attachment/export/banner');
        // $export = Post::create((Arr::except($data+['delete'=>0],['image','banner'])));
        $post = Post::create($data);
        // dd($data);
        // $export->update(['image'=>$imagename,'banner'=>$bannername]);
        return $post;
    }
}