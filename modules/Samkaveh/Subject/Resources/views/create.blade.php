@extends('Common::layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            @include('Subject::layouts.errors.error')
        </div>
        <section class="col-lg-10 col-lg-offset-1" style="margin-top: 4rem">
            <div class="box">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">افزودن موضوع</h3>
                            <div class="pull-left box-tools">
                                <a href="{{ route('subjects.index')  }}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                        <form role="form" action="{{ route('subjects.store') }}" method="post">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="title">نام موضوع</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="نام موضوع را وارد کنید...">
                                </div>
                            </div>

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="description">توضیحات کوتاهی در مورد موضوع بنویسید (اختیاری)</label>
                                    <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">ثبت</button>
                            </div>
                        </form>
                    </div>
            </div>
        </section>
    </div>
@endsection

@section('breadcrumb')
    <li><a href="{{ route('subjects.index') }}">موضوعات</a></li>
    <li>افزودن موضوع</li>
@endsection
@section('title')
افزودن موضوع
@endsection
