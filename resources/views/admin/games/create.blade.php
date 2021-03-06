@extends('layouts.app_admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ゲーム作品の追加</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.games.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">作品名</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder='作品名を入力'>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="data" class="col-md-4 col-form-label text-md-right">紹介文</label>
                            <div class="col-md-6">
                                <textarea class='description form-control' name='data' placeholder='紹介文を入力'></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="url" class="col-md-4 col-form-label text-md-right">URL</label>

                            <div class="col-md-6">
                                <input id="url" type="text" class="form-control" name="url" placeholder='MyNintendoStoreのURLを入力'>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">販売額</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" placeholder='半角数字で入力'>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="released_date" class="col-md-4 col-form-label text-md-right">配信日</label>

                            <div class="col-md-6">
                                <input id="released_date" type="text" class="form-control" name="released_date" placeholder='配信日を入力（例：2020-02-27）'>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category_id" class="col-md-4 col-form-label text-md-right">カテゴリー</label>
                            <select class="form-control col-md-6" name="category_id" id="category_id">
                                <option value="" selected>カテゴリー名を選択</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group row">
                            <label for="file1" class="col-md-4 col-form-label text-md-right">紹介画像</label>
                            <div class="col-md-6">
                                <input id="file1" type="file" class="form-control-file" name="image">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">投稿</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
