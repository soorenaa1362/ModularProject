@extends('Dashboard::master')

@section('breadcrumb')
    <li><a href="{{ route('courses.index') }}" title="دوره ها">دوره ها</a></li>
    <li><a href="#" title="ویرایش دوره">ویرایش دوره</a></li>
@endsection

@section('content')
    <div class="row no-gutters">
        <div class="col-12 bg-white">
            <p class="box__title">ویرایش دوره</p>
            <form action="{{ route('courses.store') }}" method="post" class="padding-30">
                @csrf
                <x-input name="title" placeholder="عنوان دوره" type="text" required/>

                <x-input name="slug" placeholder="نام انگلیسی دوره" type="text" class="text-left" required/>     

                <div class="d-flex multi-text">
                    <x-input type="text" class="text mlg-15" name="priority" placeholder="ردیف دوره"/>

                    <x-input type="text" placeholder="مبلغ دوره" name="price" class="text-left" required/>

                    <x-input type="number" placeholder="درصد مدرس" name="percent" class="text-left" required/>                    
                </div>
                
                <select name="teacher_id" required>
                    <option value="">انتخاب مدرس دوره</option>
                    @foreach ($teachers as $teacher)
                        <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>                    
                    @endforeach
                </select>
                <x-validation-error field="teacher_id" />

                <ul class="tags">
                    <li class="tagAdd taglist">
                        <input type="text" name="tags" id="search-field" placeholder="برچسب ها">
                    </li>
                </ul>
                <x-validation-error field="tags" />

                <select name="type" required>
                    <option value="">نوع دوره</option>
                    @foreach (\Soorenaa\Course\Models\Course::$types as $type)
                        <option value="{{ $type }}">@lang($type)</option>
                    @endforeach
                </select>
                <x-validation-error field="type" />

                <select name="status" required>
                    <option value="">وضعیت دوره</option>                    
                    @foreach (\Soorenaa\Course\Models\Course::$statuses as $status)
                        <option value="{{ $status }}">@lang($status)</option>
                    @endforeach
                </select>
                <x-validation-error field="status" />

                <select name="category_id" required>
                    <option value="">دسته بندی</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
                <x-validation-error field="category" />

                <div class="file-upload">
                    <div class="i-file-upload">
                        <span>آپلود بنر دوره</span>
                        <input type="file" class="file-upload" id="files" name="image" required/>
                    </div>
                    <span class="filesize"></span>
                    <span class="selectedFiles">فایلی انتخاب نشده است</span>
                </div>
                <x-validation-error field="image" />

                <textarea placeholder="توضیحات دوره" name="body" class="text h"></textarea>
                <x-validation-error field="body" />

                <button class="btn btn-brand">ایجاد دوره</button>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script src="/panel/js/tagsInput.js"></script>
@endsection