<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleForm extends FormRequest
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
     * タグ名にスペースと/(不明瞭な遷移をさせない)を含ませない。
     */
    public function rules()
    {
        return [
            'game_id' => 'required',
            'title' => 'required|string|max:50',
            'body' => 'required|string|max:200',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tags' => 'json|regex:/^(?!.*\s).+$/u|regex:/^(?!.*\/).*$/u',
        ];
    }

    /**
     * 入力されたタグ情報の整形（コレクション型変換・６個以上入力された場合に５個に・タグ部分のみ返す(textキーの値のみ)）
     */
    public function passedValidation()
    {
        $this->tags = collect(json_decode($this->tags))
            ->slice(0, 5)
            ->map(function ($requestTag) {
                return $requestTag->text;
            });
    }
}
