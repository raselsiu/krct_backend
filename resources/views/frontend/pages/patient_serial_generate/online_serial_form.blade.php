@extends('frontend.layout.front_layout')

@section('content')
    <div class="form_container">
        <div class="form_container_inner" style="margin-bottom: 100px">
            <h4 style="text-align: center">Get Your Online Serial Right Now By Fill-Up This Form</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="contact_wrapper">
                        <form action="{{ route('storeDataMakeSerial') }}" method="post">
                            @csrf

                                
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="রোগির নাম * " name="name">
                                        @if ($errors->has('name'))
                                            <small style="color: red">আপনার নাম লিখুন</small>
                                        @endif
                                    </div>
                               
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="বয়স" name="age">
                                    </div>
                                    <div class="form-group">
                                       <select name="sex" id="sex" class="form-control">
                                            <option value="">লিঙ্গ নির্বাচন করুন * </option>
                                            <option value="male">পুুরুষ</option>
                                            <option value="female">মহিলা </option>
                                       </select>
                                        @if ($errors->has('sex'))
                                            <small style="color: red">লিঙ্গ নির্বাচন করুন</small>
                                        @endif
                                    </div>


                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="মোবাইল" name="mobile">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="ঠিকানা * " name="address">
                                        @if ($errors->has('address'))
                                            <small style="color: red">আপনার ঠিকানা লিখুন</small>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="ওজন - কেজিতে (অপশনাল)" name="weight">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="সমস্যা উল্লেখ করুন, যেমনঃ জ্বর, সর্দি-কাশি, ঠান্ডা  (অপশনাল)" name="problems">
                                    </div>
                               
                           

                            <button type="submit" class="btn btn-success contact_btn">Get Your Online Serial</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection