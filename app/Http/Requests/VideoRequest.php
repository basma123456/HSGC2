<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'video' => 'nullable|mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi',
              'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|min:120'
        ];
    }

    public function messages()
    {
        return [
            'video.video' => trans('validation.video')  ,
            'video.mimetypes' => trans('validation.mimetypes')  ,

            'image.image' => trans('validation.image')  ,
            'image.mimes' => trans('validation.mimes')  ,

        ];
    }

}
