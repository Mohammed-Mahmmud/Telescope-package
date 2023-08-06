<?php
namespace App\Actions\Post;

use App\Helper\ImageHelper;
use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;

class UpdatePostAction
{
    // use ImageHelper;
    public function handle(Post $post,array $data): Post
    {
        // $imagename = $this->UpdateImage($data['image']??'','Attachment/export/image');
        // $bannername = $this->UpdateImage($data['banner']??'','Attachment/export/banner');
        // $export->update((Arr::except($data+['delete'=>0],['image','banner'])));
        // if(isset($data['image'])){
        //     $image = public_path("Attachment/export/image/$export->image");
        //     if ( File::exists($image)) {
        //         unlink($image);
        //     }
        // $export->update(['image'=>$imagename]);
        // }
        //  if(isset($data['banner'])){
        //     $banner = public_path("Attachment/export/banner/$export->banner");
        //     if ( File::exists($banner)) {
        //         unlink($banner);
        //     }
        // $export->update(['banner'=>$bannername]);
        // }
        $post->update($data);
        return $post;
    }
}